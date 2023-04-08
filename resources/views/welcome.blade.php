<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  

  <div class="login-card">
    <h1>Log-in</h1><br>
    <form action="{{route('login-user')}}" method="post">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
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

</html>