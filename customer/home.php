 <!DOCTYPE html>

 <?php
    session_start();
    require_once '../include/db.php';
    $email = $_SESSION['email'];
    $fname = "";
    $lname = "";
    $res = mysqli_query($conn, "Select fname,lname from register where email_id ='$email'");
    while ($row = mysqli_fetch_array($res)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
    }

    ?>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <title>Tourism</title>

     <!-- Bootstrap core CSS -->
     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="../css/full-width-pics.css" rel="stylesheet">

 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top">
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
                         <a class="nav-link" href="#" id="packages">View Package</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#" id="cbook">Confirm Booking</a>

                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#" id="feed">Feedback</a>

                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="../logout.php">Logout</a>

                     </li>
                 </ul>
             </div>

         </div>
         <p class="text-light pt-3 float-left">
             <?php echo $fname . "  " . $lname; ?>
         </p>
     </nav>
     <div class="container pt-1">
         <div id="body"> </div>
     </div>
 </body>


 <script>
     $(function() {
         $('#packages').click(function() {

             $('#body').load('./packages.php');
         })
         $('#feed').click(function() {

             $('#body').load('./feedback.php');
         })
         $('#cbook').click(function() {

             $('#body').load('./confirm_book.php');
         })


     });
 </script>





 </html>