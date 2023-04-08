<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-card">
    <h1>Welcome to your dashboard</h1><br>
    <h1><?php echo e($data->name); ?> <?php echo e($data->surname); ?></h1><br>
  <form action="<?php echo e(route('login-user')); ?>" method="post">
  <?php if(Session::has('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
      <?php endif; ?>
      <?php if(Session::has('fail')): ?>
      <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
      <?php endif; ?>
      <?php echo csrf_field(); ?>
    
  </form>
  <a href="logout">Logout</a>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>
</html>
<?php /**PATH C:\laragon\www\blog\orestis_demo\resources\views/dashboard.blade.php ENDPATH**/ ?>