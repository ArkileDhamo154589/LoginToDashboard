<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$data->name}} {{$data->surname}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="geniko">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">{{$data->name}} {{$data->surname}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/damo/second-task/app%20%281%29/public/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/damo/second-task/app%20(1)/public/">Logout</a>
          </ul>
        </div>
      </div>
    </nav>
    
  
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="hero-title">Καλως ήρθες στην σελίδα μου {{$data->name}} {{$data->surname}}</h1>
        <div class="fade-in-text">
        <p class="hero-text">Ένα Hero Section για ήρωες δεξιά σου. </p>
</div>
        <button onclick="location.href='{{ url('http://milesome.com/damo/second-task/app%20%281%29/public/about') }}'"><span>Σχετικά με μένα</span><i></i></button>
      </div>
      <div class="col-md-6">
        <img src="https://cdn.pixabay.com/photo/2016/12/12/21/48/business-1902770_960_720.png" alt="Hero Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>



 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4 class="about">Σχετικά</h4>
          
          <p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel dolor at arcu elementum elementum. Curabitur quis malesuada orci. Suspendisse potenti. Sed vitae turpis ac magna bibendum efficitur. Integer vitae nulla ut mauris aliquet facilisis. Praesent vel tellus vel odio bibendum dignissim non non nibh.</p>

        </div>

        <div class="col-md-4">
        
        </div>
        <div class="col-md-4">
            <div class="plhrofories">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
          <li>Vasileos Heracleus 33</li>
            <li>Thessaloniki 54627</li>
            <li>138</li>
            <li>damos@cloudthinking.gr</li></li>
          </ul>
        </div>
      </div>
</div>
      <div class="row mt-4">
        <div class="col-md-12 text-center">
          <hr class="my-4">
          <p class="kopi">&copy; 2023 My Website. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
  </body>
</html>