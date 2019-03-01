<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KiNET :: Konsultan IT Bandung</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">

</head>

<?php 
  $title = "This Account Has Been Suspended";
  $description = "This website has been suspended <strong>due to non payment</strong>. for further information, please contact your web administrator.";
  $showEmailForm = false;
?>

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/bg.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3"><?=$title; ?></h1>
            <p class="mb-5"><?=$description;?></p>
            <?php if ($showEmailForm): ?>
            <div class="input-group input-group-newsletter">
              <input type="email" class="form-control" placeholder="Enter email..." aria-label="Enter email..." aria-describedby="basic-addon">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button">Notify Me!</button>
              </div>
            </div>
          <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="http://www.twitter.com/cuheguevara">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="http://www.facebook.com/hendra.syp">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="http://www.instagram.com/suhendrayputra">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>

</html>
