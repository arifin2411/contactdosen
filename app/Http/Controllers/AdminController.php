<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Infodosen;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function showPageAdminInsertDosen(){
        return view('admininsertdosen');
    }

    public function showPageAdminHome(){
        return view('adminhome');
    }

    public function validationInsertDosen(Request $request){
        $valid = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'matakuliah'=>'required',
            'Deskripsi'=>'required',
            'email'=>'required'
        ]);

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $this->fotoDosen($request);
        $table = new Infodosen();
        $table->name = request()->name;
        $table->matakuliah = request()->matakuliah;
        $table->Deskripsi = request()->Deskripsi;
        $table->picture = 'InsertDosen/'. $request->picture->getClientOriginalName();
        $table->email = request()->email;
        $table->save();
        return view('adminhome');
    }

    public function fotoDosen(Request $request)
    {
        $image = $request['picture'];
        $file_name = $image->getClientOriginalName();
        $image->move('InsertDosen',$file_name);
    }

    public function showPageDelete(Request $request){
        $search = $request->search;
        $infodosens = Infodosen::where('name','like','%'.$search.'%')->paginate(40);
        return view('admindelete',compact('infodosens','search'));
    }

    public function delete($id)
    {
        $infodosen = Infodosen::find($id);
        $infodosen->delete();
        return redirect()->back();
    }

    public function validationInsertFeedback(Request $request){
        $valid = Validator::make($request->all(),[

        ]);

        if($valid->fails()) return redirect()->back()->withErrors($valid->errors());
        $table = new Feedback();
        $table->deskripsi = request()->deskripsi;
        $table->save();

        return view('home');
    }

}

