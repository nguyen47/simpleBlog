
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>
  <base href="<?php echo e(asset('')); ?>">

  <!-- Bootstrap core CSS -->
  <link href="clientAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="clientAssets/css/blog-home.css" rel="stylesheet">

  <!-- Temporary navbar container fix -->
  <style>
  .navbar-toggler {
    z-index: 1;
  }

  @media (max-width: 576px) {
    nav > .container {
      width: 100%;
    }
  }
  </style>

</head>

<body>

  <!-- Navigation -->
  <?php echo $__env->make('layout.client.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?php echo $__env->yieldContent('content'); ?>
      <!-- Sidebar Widgets Column -->
      <?php echo $__env->make('layout.client.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-inverse">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="clientAssets/vendor/jquery/jquery.min.js"></script>
  <script src="clientAssets/vendor/tether/tether.min.js"></script>
  <script src="clientAssets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
