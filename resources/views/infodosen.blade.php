@extends('layouts.app')

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Dosen</title>
</head>
<body>

 <div class="logo">
     <img src="{{url('/img/logo.jpg')}}" class="gbr">
 </div>


 <ul>
     <li>
         <a href="{{url('/home')}}" id="menu">HOME</a>
     </li>

     <li>
         <a class="active" href="{{url('/infodosen')}}" id="menu">DOSEN INFORMATION</a>
     </li>
     <li>
         <a href="{{url('/feedback')}}" id="menu">FEEDBACK</a>
     </li>
     <li>
         <a href="{{url('/aboutus')}}" id="menu">ABOUT US</a>
     </li>
     <li>
         <a  href="{{url('/homeawal')}}" id="menu" class="">LOGOUT</a>
     </li>
 </ul>



 <div class="paper-de">

     <form action="{{url('infodosen')}}" method="get" >
         <input type="text" name="search" placeholder="Search by Name" value="{{ $search }}">
         <input type="submit" value="Search">
     </form>

     @foreach($infodosens->all() as $infodosen)
         <div class="insert-po">
             <div>
                 <img src="{{asset($infodosen->picture)}}" class="displaypokemon" alt=""><br>
                 Nama Dosen : {{$infodosen->name}} <br> <br>
                 Mata kuliah : {{$infodosen->matakuliah}}<br> <br>
                 Email : {{$infodosen->email}}<br><br>
                 {{$infodosen->Deskripsi}} <br>
             </div>
         </div>
     @endforeach
 </div>


 <div class="footer">
    <div class="ftr">
     <p>Copyright &copy; 2017 LL. All Right Reserved</p>
    </div>
 </div>

</body>
</html>