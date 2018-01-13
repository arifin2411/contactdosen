<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Infodosen;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function showPageHomeAwal(){
        return view('homeawal');
    }

    public function showPageHome(){
        return view('home');
    }

    public function showPageAboutus(){
        return view('Aboutus');
    }

    public function validationRegister(Request $request)
    {
        // dd($request);
        $valid = Validator::make($request->all(),[
        'nim'=> 'required|min:10|numeric|unique:users',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|alpha_num',
        'password_confrimation'=>'required|same:password_confrimation',
    ]);
        //       dd('as');

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $this->fotoProfile($request);
        $table = new User();
        $table->nim = request()->nim;
        $table->email = request()->email;
        $table->password = bcrypt(request()->password);
        $table->picture = 'Register/'. $request->profile_pitcure->getClientOriginalName();
        $table->role = 'user';
        $table->save();

        return view('login');
    }
    public function fotoProfile(Request $request)
    {
        $image = $request['profile_pitcure'];
        $file_name = $image->getClientOriginalName();
        $image->move('Register/',$file_name);
        //return redirect('/register');
    }

    public function showPageLogin(){
        return view('login');
    }

    public function login(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required|min:5|alpha_num',
        ]);

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        if(Auth::viaRemember())
        {
            return redirect('/home');
        }else if(Auth::attempt([
            'email'=>$request['email'],
            'password'=>$request['password']
        ], $request['remember']))
        {
            if(Auth::user()->role =='user')
                return redirect('/home');
            else if (Auth::user()->role =='admin')
                return redirect('/adminhome');
        }
        return back();
    }


    public function showPageInfoDosen(Request $request){

        /*return view('infodosen')->with([
            'infodosens'=> Infodosen::all()
  $image = $request['picture'];
        $file_name = $image->getClientOriginalName();
        $image->move('fotopokemon',$file_name);

        ]);*/

        $search = $request->search;
        $infodosens = Infodosen::where('name','like','%'.$search.'%')->paginate(40);
        return view('infodosen',compact('infodosens','search'));
    }

    public function validatorInsertfeedback(Request $request)
    {
        $valid = Validator::make($request->all(),[

        ]);

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $table = new Feedback();
        $table->deskripsi = request()->deskripsi;
        $table->save();

        return view('home');
    }

    public function showPageRegister(){
        return view('register');
    }


    public function fotoDosen(Request $request)
    {
        $image = $request['pokemon_picture'];
        $file_name = $image->getClientOriginalName();
        $image->move('InsertPokemon',$file_name);
    }

    public function showPagefeedback(){
        return view('feedback');
    }


    public function validationInsert(Request $request){
        $valid = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'description'=>'required',
        ]);

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $this->fotodos($request);
        $table = new Infodosen();
        $table->name = request()->name;
        $table->picture = 'fotodosen/'. $request->picture->getClientOriginalName();
        $table->description = request()->description;
        $table->save();

        return view('adminhome');
    }

    public function fotodos(Request $request)
    {
        $image = $request['picture'];
        $file_name = $image->getClientOriginalName();
        $image->move('infodosen',$file_name);
    }

    public function showPageaboutus2()
    {
        return view('/aboutus2');
    }

}
