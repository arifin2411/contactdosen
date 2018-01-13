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
        <a class="active" href="{{url('/homeawal')}}" id="menu">HOME</a>
    </li>
    <li>
        <a href="{{url('/login')}}" id="menu">LOGIN</a>
    </li>
    <li>
        <a href="{{url('/aboutus2')}}" id="menu">ABOUT US</a>
    </li>
</ul>

<br><br>
<div>
    <h2>WELCOME TO</h2>
    <h1>DOSEN INFORMATION</h1>
</div>

<section>
    <div id="content-slider">
        <div id="slider">
            <div id="slider-left" class="arrow"><</div>
            <div id="slider-right" class="arrow">></div>
        </div>

    </div>
</section>


<br><br><br><br>

<div class="footer">
    <div class="ftr">
        <p>Copyright &copy; 2017 LL. All Right Reserved</p>
    </div>
</div>
</body>
</html>