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
            <a class="active" href="{{url('/registers')}}" id="menu">REGISTER</a>
        </li>
        <li>
            <a href="{{url('/aboutus')}}" id="menu">ABOUT US</a>
        </li>
    </ul>

    <div class="paper-des">
        <form action="/register/save" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="nim" placeholder=" Input Nim"> <br> <br>
            <input type="text" name="email" placeholder=" Input Your University Email"><br><br>
            <input type="password" name="password" placeholder="Input Your password"> <br><br>
            <input type="password" name="password_confrimation" placeholder="Input password Confrimation"> <br><br>
            <input type="file" value="Browse" name="profile_pitcure" > <br><br>
            <input type="submit" value="submit">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

        </form>

    </div>

</body>
</html>