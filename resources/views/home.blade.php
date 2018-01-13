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
            <a class="active" href="{{url('/home')}}" id="menu">HOME</a>
        </li>

        <li>
            <a href="{{url('/infodosen')}}" id="menu">DOSEN INFORMATION</a>
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

    <br><br>
    <div>
        <h2>WELCOME TO</h2>
        <h1>DOSEN INFORMATION</h1>
    </div>


        <div class="slider">
            <input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
            <input type="radio" name="slide" class="radio-nav" id="nav-2"/>
            <input type="radio" name="slide" class="radio-nav" id="nav-3"/>
            <ul class="slide">
                <li class="slide-1">
                    <img src="{{asset('/img/01.jpg')}}" alt="">
                </li>
                <li class="slide-2">
                    <img src="{{asset('/img/02.jpg')}}" alt="">
                </li>
                <li class="slide-3">
                    <img src="{{asset('/img/03.jpg')}}" alt="">
                </li>
            </ul>
            <div class="nav-arrow nav-next">
                <label class="nav-1" for="nav-1"></label>
                <label class="nav-2" for="nav-2"></label>
                <label class="nav-3" for="nav-3"></label>
            </div>
            <div class="nav-arrow nav-next">
                <label class="nav-1" for="nav-1"></label>
                <label class="nav-2" for="nav-2"></label>
                <label class="nav-3" for="nav-3"></label>
            </div>
        </div>
    

    <br><br><br><br>

    <div class="footer">
        <div class="ftr">
            <p>Copyright &copy; 2017 LL. All Right Reserved</p>
        </div>
    </div>


</body>
</html>