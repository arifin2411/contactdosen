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
    <li class="dd">
        <a  id="menu">DOSEN</a>
        <div class="dd-content">
            <a href="{{url('/admininsert')}}">Insert</a>
            <a href="{{url('#')}}">Delete</a>
        </div>
    </li>

</ul>


</body>
</html>