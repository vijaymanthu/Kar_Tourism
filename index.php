<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <style type="text/css">
    #bodypart {
      background-image: url('./images/tourist-map.jpg');

      /* The image used */
      background-color: #cccccc;
      /* Used if the image is unavailable */
      height: 1000px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;
      border-radius: 50%;

    }
  </style>



  <title>Tourism</title>

  <!-- Bootstrap core CSS -->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./css/full-width-pics.css" rel="stylesheet">

</head>

<body>
  <?php include './header.php'; ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">KARNATAKA TOURISM </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="about" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="package" href="#">Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#myModal">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal2" href="#myModal2">Create Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- <div id="image">
    <div id="bodypart">

      <div class="container">
        <div class="row justify-content-center">

        </div>
      </div>
    </div>
  </div> -->
  <div class="container">
  </div>
  <div id="content_body">
  </div>

  <?php
  include './footer.php';
  ?>
  <script>
    $(function() {

      $('#package').click(function() {

        $('#content_body').load('./packages.php');
      })
      $('#about').click(function() {

        $('#content_body').load('./about.php');
      })
      $('#contact').click(function() {

        $('#content_body').load('./contact.php');
      })


    });
  </script>
  <?php
  include './footer.php';
  ?>
</body>

</html>