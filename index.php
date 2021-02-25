<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <style type="text/css">
    #imageslider {
      height: 400px;
      width: auto;
      border: solid;
    }
  </style>



  <title>Tourism</title>

  <!-- Bootstrap core CSS -->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./css/full-width-pics.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
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
  <!-- <div id="image" class="responsive"> -->
  <div id="imageslider">
    <div id="carouselExampleIndicators" class="carousel slide w-100" style="height: 500px;" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="./images/image1.jpeg" height="400px" alt="Second slide">

        </div>
        <div class="carousel-item">
          <img class="w-100" src="./images/hampi.jpg" height="400px" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <p class="h1 text-light font-weight-bolder " style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">HAMPI
            <p>
            <p>...</p>

          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="./images/image2.jpg" height="400px" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>






  <div class="container">
    <div class="row">

    </div>
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