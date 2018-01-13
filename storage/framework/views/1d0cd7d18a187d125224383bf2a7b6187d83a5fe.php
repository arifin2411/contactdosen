        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="logo">
        <img src="<?php echo e(url('/img/logo.jpg')); ?>" class="gbr">
    </div>
    <hr color="gray" witdth="800px" size="3">

    <ul>
        <li>
            <a  id="menu">CONTACT DOSEN</a>
        </li>
        <li>
            <a href="<?php echo e(url('/home')); ?>" id="menu">HOME</a>
        </li>

        <li>
            <a href="<?php echo e(url('/infodosen')); ?>" id="menu">DOSEN INFORMATION</a>
        </li>
        <li>
            <a href="<?php echo e(url('/feedback')); ?>" id="menu">FEEDBACK</a>
        </li>
        <li>
            <a href="<?php echo e(url('/aboutus')); ?>" id="menu">ABOUT US</a>
        </li>
        <li>
            <a href="<?php echo e(url('/login')); ?>" id="menu">LOGIN</a>
        </li>
    </ul>
    <hr color="gray" witdth="800px" size="3">
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
            <div id="slider-bar">
                <div class="slider-item active"><img src="<?php echo e(url('/img/01.jpg')); ?>"></div>
                <div class="slider-item"><img src="<?php echo e(url('/img/02.jpg')); ?>"></div>
                <div class="slider-item"><img src="<?php echo e(url('/img/03.jpg')); ?>"></div>
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>