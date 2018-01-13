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
        <a href="{{url('/homeawal')}}" id="menu">HOME</a>
    </li>
    <li>
        <a href="{{url('/login')}}" id="menu">LOGIN</a>
    </li>
    <li>
        <a class="active" href="{{url('/aboutus2')}}" id="menu">ABOUT US</a>
    </li>
</ul>

<div class="paper-de">
    <h1> About Us</h1>
    <div class="title">
        Contact Dosen adalah sebuah website yang berfungsi sebagai Informasi tentang dosen - dosen yang ada di Binus.
        <br>
        <br>
        <br>
        <h1>Developers</h1>
        <p>Arifin</p>
        <p>Della Clarissa</p>
        <p>Edwardo Barlian</p>
        <br>
        <h2>Our Contact</h2>
        <p>Telp/Fax :+62 12341234123</p>
        <p>Email:info@contactdosen.com</p>
        <h2>Social Media</h2>
        <p>Facebook: Contact Dosen</p>
        <p>Twitter: @contactdosen</p>
        <p>Instagram: @contactdosen</p>

    </div>
    <br><br><br><br>
<br>

<div class="footer">
    <div class="ftr">
        <p>Copyright &copy; 2017 LL. All Right Reserved</p>
    </div>
</div>

</body>
</html>