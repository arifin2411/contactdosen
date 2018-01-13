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
    <li><a class="active" href="{{url('/admininsert')}}" id="menu">Insert</a></li>
    <li><a href="{{url('/admindelete')}}" id="menu">Delete</a></li>
</ul>


<div class="paper-des">
    <form action="/admininsert/save" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <h1>Insert Dosen</h1>
        <input type="text" name="name" placeholder="Nama Dosen"><br><br>
        <input type="text" name="matakuliah" placeholder="Mata kuliah"><br><br>
        <input type="text" name="Deskripsi" placeholder="Deskripsi"><br><br>
        <input type="file" placeholder="Browse" name="picture" id=""><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="submit" value="Insert">
    </form>

    <br><br>
    @foreach($errors->all() as $error)
        <li style="color: red">{{$error}}</li>
    @endforeach
</div>

</body>
</html>