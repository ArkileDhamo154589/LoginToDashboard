<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="/style.css">

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
    <form action="<?php echo e(route('login-user')); ?>" method="post">
      <?php if(Session::has('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
      <?php endif; ?>
      <?php if(Session::has('fail')): ?>
      <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
      <?php endif; ?>
      <?php echo csrf_field(); ?>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="pass" placeholder="Password" required>
      <input type="submit" name="login" class="login login-submit" value="login">
    </form>

    <div class="login-help">
      <a href="register">Not a member? Register</a>
    </div>
  </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\axilleas-app\resources\views/login.blade.php ENDPATH**/ ?>