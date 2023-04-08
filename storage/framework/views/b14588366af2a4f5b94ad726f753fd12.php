<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="login-card">
    <h1>Register</h1><br>
    <form action="<?php echo e(route('registration')); ?>" method="post">
      <?php if(Session::has('success')): ?>
      <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
      <?php endif; ?>
      <?php if(Session::has('fail')): ?>
      <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?></div>
      <?php endif; ?>
      <?php echo csrf_field(); ?>
      <input type="text" name="name" placeholder="Name" required>
      <input type="text" name="surname" placeholder="Surname" required>
      <input type="text" name="email" placeholder="Email" required>
      <span class="alert alert-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      <input type="text" name="user" placeholder="Username" required>
      <span class="alert alert-danger"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      <input type="password" name="pass" placeholder="Password" required>
      <input type="submit" name="register" class="login login-submit" value="Register">
    </form>

    <div class="login-help">
      <a href="/">member? Log-in</a>
    </div>
  </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\axilleas-app\resources\views/register.blade.php ENDPATH**/ ?>