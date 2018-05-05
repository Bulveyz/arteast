<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Libs Styles-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Playfair+Display+SC|Poiret+One" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('libs/builder.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('libs/aos.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('libs/font-awesome.min.css')); ?>">

  <!--Main Styles-->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <title>Arteast Dance</title>
</head>
<body>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<!--Footer-->
<footer class="page-footer">
  <div class="container">
    <div class="row">

      <!--Footer Title-->
      <div class="col">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <!--End Footer Title-->


      <!--Footer Content Right-->
      <div class="col">

        <!--Footer Content Right Title-->
        <h5 class="white-text">Контакты</h5>
        <!--End Footer Content Right Title-->

        <!--Footer Content Right Items-->
        <ul>
          <li>тел: 8 702 816 99 96</li>
          <li>
            <ul class="d-flex social-links">
              <li>
                <a href="#"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-2x fa-youtube" aria-hidden="true"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!--End Footer Content Right-->

    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2018 Bulveyz Studio
    </div>
  </div>
</footer>
<!--End Footer-->

<!--Libs JS-->
<script src="<?php echo e(asset('libs/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/materialize.j')); ?>s"></script>
<script src="<?php echo e(asset('libs/aos.js')); ?>"></script>
<!--Main JS-->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>