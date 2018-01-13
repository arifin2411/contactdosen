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
            <a href="{{url('/home')}}"id="menu">HOME</a>
        </li>

        <li>
            <a href="{{url('/infodosen')}}" id="menu">DOSEN INFORMATION</a>
        </li>
        <li>
            <a class="active" href="{{url('/feedback')}} " id="menu">FEEDBACK</a>
        </li>
        <li>
            <a href="{{url('/aboutus')}}" id="menu">ABOUT US</a>
        </li>
        <li>
            <a  href="{{url('/homeawal')}}" id="menu" class="">LOGOUT</a>
        </li>
    </ul>


    <h1>FeedBack</h1>
    <div class="paper-des">
        <form action="/insertfeedback/save" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="deskripsi" placeholder="Input your Feedback">
            <input type="submit" value="Insert">
        </form>
    </div>




    <div class="footer">
        <div class="ftr">
            <p>Copyright &copy; 2017 LL. All Right Reserved</p>
        </div>
    </div>
</body>
</html>