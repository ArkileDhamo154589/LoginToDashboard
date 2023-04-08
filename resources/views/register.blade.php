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
    <form action="{{route('registration')}}" method="post">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
      <input type="text" name="name" placeholder="Name" required>
      <input type="text" name="surname" placeholder="Surname" required>
      <input type="text" name="email" placeholder="Email" required>
      <span class="alert alert-danger">@error('email'){{$message}} @enderror</span>
      <input type="text" name="user" placeholder="Username" required>
      <span class="alert alert-danger">@error('username'){{$message}} @enderror</span>
      <input type="password" name="pass" placeholder="Password" required>
      <input type="submit" name="register" class="login login-submit" value="Register">
    </form>

    <div class="login-help">
      <a href="/damo/second-task/app%20(1)/public/">member? Log-in</a>
    </div>
  </div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>

</html>