<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
       body{
           background-color: #fcfdce;
           font-family: Arial;
       }

       /* CSS Resets */
       * {
           padding:0;
           margin:0;
       }
       .slider {
           position: relative;
           overflow: hidden;
           margin-top: 70px;
       }
       .slider, ul.slide li img{
           position: relative;
           width:1000px;
           height: 450px;
           left:251px;
       }
       ul.slide {
           position: absolute;
           display: block;
           width:300%;
       }
       .caption {
           position: absolute;
           background-color: rgba(0,0,0,0.5);
           bottom:0;
           padding:10px;
           color:#fff;
           left: 0;
           right: 0;
       }/* Yang membuatnya jadi slider, alias kode intinya */

       ul.slide li {
           display: inline-block;
           float: left;
           transition: 2000ms;
       }
       ul.slide li.slide-1 {
           left: 5%;
       }
       ul.slide li.slide-2 {
           left: 100%;
       }
       ul.slide li.slide-3 {
           left: 215%;
       }
       #nav-1:checked ~ ul.slide li{
           transform: translateX(-25%);
       }
       #nav-2:checked ~ ul.slide li{
           transform: translateX(-125%);
       }
       #nav-3:checked ~ ul.slide li {
           transform: translateX(-225%);
       }

       /* End, yang membuatnya jadi slider *//* Navigator */
       .radio-nav { /* menghilangkan radio button */
           display: none;
       }/* styling untuk tombol next dan previous slide */

       .nav-arrow {
           position: absolute;
           top:45%;
           width:50px;
           height: 50px;
       }
       .nav-next {
           right:1px;
       }
       .nav-prev {
           left:12px;
       }
       .nav-arrow label {
           transition:all 0.3s;
           background-color: rgba(0,0,0,0.3);
           color: #fff;
           display: block;
           position: absolute;
           padding:10px 20px;
           cursor: pointer;
           z-index: 1;
           opacity: 0;
           font-weight: bold;
           line-height: 1;
       }
       .slider:hover .nav-arrow label{
           background-color: rgba(0,0,0,0.7);
       }

       #nav-1:checked ~ .nav-prev label.nav-3,
       #nav-1:checked ~ .nav-next label.nav-2,
       #nav-2:checked ~ .nav-prev label.nav-1,
       #nav-2:checked ~ .nav-next label.nav-3,
       #nav-3:checked ~ .nav-prev label.nav-2,
       #nav-3:checked ~ .nav-next label.nav-1 {
           z-index: 2;
           opacity: 1;
       }


        #menu {
            color: #fcfdc2;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
        }
        #qw{
            font-weight: bold;
            font-size: 25px;
            text-align: left;
            text-align: center;
        }

        a:active {
            background-color: #07273c;
        }

        .arrow{
            font-size: 60px;
            font-weight: bold;
            position: absolute;
            cursor: pointer;
            top: 45%;
            color: #07273d;
            opacity: 0.5;
        }


        .arrow::selection{
            background: none;
        }

        #slider-left{ left:20px; }

        #slider-right{ right: 20px; }


        .makanan{
            width: 200px;
            height: 200px;
        }

        a:visited {
            color: green;
        }
        #p{
            text-align: center;
        }

        a img{
            display: block;
        }

        a span{
            position: absolute;
            display: none;
            top: 0;
            left: 0;
            bottom: 0;
            right;
            background: rgba(255,140,0,1);
            color: #ddd;
            padding: 20px;
        }

        a:hover span{
            color: black;
        }

       ul {
           list-style-type: none;
           margin: 0;
           padding: 0;
           overflow: hidden;
           background-color: #333;
       }

       li {
           float: left;
           font-family: Arial;
           color: #66afe9;
       }

       li a {
           display: block;
           color: white;
           text-align: center;
           padding: 14px 16px;
           text-decoration: none;
       }

       li a:hover:not(.active) {
           background-color: #111;
       }

       .active {
           background-color: #666;

       }
        .logo{
            background-color: #f7fb79;
        }

        .gbr{
             width: 100px;
             height: 100px;
             padding-left: 550px;
         }
        .gbrr{

            width: 100px;
            height: 100px;
        }

        .footer{
            padding: 2px;
            width: 100%;
            background-color: #333;

        }

        .ftr{
            text-align: center;
            font-size: 12px;
            font-family: Arial;
            color: floralwhite;
        }

        h2{
            text-align: center;
            color: dimgrey;
            font-size: 40px;

        }

        h1{
            text-align: center;
            color: dimgrey;
            font-size: 50px;
        }

        .paper-de{
            margin: 20px;
            border-radius: 40px;
            padding: 30px;
            background-color: #f7fb79;
            font-size: 13px;
            margin-top: 40px;
            text-align: left;
            height: 900px;
        }

        .paper-des{
            margin: 450px;
            border-radius: 40px;
            font-size: 13px;
            margin-top: 40px;
            text-align: left;
            height: 170px;
        }
        .paper-der{
               margin: 100px;
               border-radius: 40px;
               padding: 30px;
               background-color: #f7fb79;
               font-size: 13px;
               margin-top: 40px;
               text-align: left;
               height: 100px;
               padding-left: 700px;
           }
        .paper-dess{
            margin: 100px;
            border-radius: 40px;
            padding: 30px;
            background-color: #f7fb79;
            font-size: 13px;
            margin-top: 40px;
            text-align: left;
            height: 100px;
            padding-left: 700px;
        }

        .insert-po {
            width: 180px;
            float: left;
            margin-left: 40px;
            padding-top: 45px;
            text-decoration: none;

        }

        .displaypokemon{
            width: 130px;
            height: 130px;
            float : left;
            padding-left: 20px;
        }

        .title{
            text-align: center;
            font-size: 20px;
            padding-bottom: 3px;
        }

        .aboutusContent{
            padding-left: 250px;
            padding-right: 250px;
        }

        .menu ul {
            margin: 0;
            padding: 0;
        }
        .menu ul li {
            list-style-type: none;
            float: left;
        }
        .dd:hover .dd-content {
            display: block;
        }
        .dd-content {
            display: none;
        }
        .dd-content a {
            padding: 5px;
            display: block;
            text-decoration: none;
            color: white;
        }
        .dd {
            display: block;
            /*overflow: hidden;*/
        }
        .dd-content {
            /*display: none;*/
            position: absolute;
            background: black;
            color: white;

        }
        .dd-content:hover {

            display: block;
        }

       input[type=text] {
           width: 100%;
           padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
           border: none;
           background-color: #333;
           color: white;
       }
       input[type=password] {
           width: 100%;
           padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
           border: none;
           background-color: #333;
           color: white;
       }

       input[type=button], input[type=submit], input[type=reset] {
           background-color: dimgrey;
           border: none;
           color: floralwhite;
           padding: 10px 32px;
           text-decoration: none;
           margin: 4px 2px;
           cursor: pointer;
       }

       .isrt{

       }

    </style>

</head>
<body>

</body>
</html>