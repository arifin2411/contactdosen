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
    <img src="<?php echo e(url('/img/logo.jpg')); ?>" class="gbr">
</div>

<ul>
    <li>
        <a href="<?php echo e(url('/homeawal')); ?>" id="menu">HOME</a>
    </li>

    <li>
        <a class="active" href="<?php echo e(url('/login')); ?>" id="menu">LOGIN</a>
    </li>
    <li>
        <a href="<?php echo e(url('/aboutus2')); ?>" id="menu">ABOUT US</a>
    </li>
</ul>


<div  class="paper-des">
    <form action="/login/login" method="post" class="paperrgs" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <h1>Login</h1>
        <img src="<?php echo e(url('/img/valor-red.png')); ?>" class="gbr-valor-lgn" alt=""><br>
        <label for="femail">Email</label>
        <input type="text" name="email" placeholder="youremail@example.com"><br><br>
        <label for="fpassword">Password</label>
        <input type="password" name="password" value=""><br><br>
        <input type="checkbox" name="remember">Remember Me<br><br>
        <input type="submit" value="Login"><br><br><br>
        <a href="<?php echo e(url('/registers')); ?>">haven't register yet ?   </a>
    </form>
</div>
</body>
</html>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>