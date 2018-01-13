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
<div class="logo">
    <img src="{{url('/img/logo.jpg')}}" class="gbr">
</div>

<ul>
    <ul>
        <li><a href="{{url('/admininsert')}}" id="menu">Insert</a></li>
        <li><a class="active" href="{{url('/admindelete')}}" id="menu">Delete</a></li>
    </ul>
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
                <a style="text-decoration: none; color: red"   href="{{url('/delete/'.$infodosen->id)}}">DELETE DOSEN</a>
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