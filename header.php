 <?php
    require './include/db.php';
    session_start();
    ?>
 <div class="modal fade" id="myModal">
     <div class="modal-dialog">
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title text-danger\">Login </h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">
                 <form method="post">
                     <div class="form-group">
                         <label for="email" class="col-3 col-sm-3">Email</label>
                         <input type="email" name="email_id" placeholder="example@gmail.com" id="email" class="col-8 col-sm-8 form-control" required="">
                     </div>
                     <div class="form-group">
                         <label for="password" class="col-3 col-sm-3">Password</label>
                         <input type="password" name="password" placeholder="****" class="col-8 col-sm-8 form-control" id="password" required="">
                     </div>
                     <div class="form-group">

                     </div>
                     <div class="form-group ">
                         <button class="btn btn-primary" name="login">Login</button>
                         <a href="" class="offset-1 text-success h6" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Click Here To Register</a>

                     </div>
                     <div class="form-group ">
                         <a class=" text-prmary h6" href="forgetPassword.php">Forget Password?</a>

                     </div>
                 </form>

             </div>

             <!-- Modal footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>


 <div class="modal fade" id="myModal2">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title  text-danger">Create Account</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">
                 <form method="post">
                     <div class="form-group row">
                         <label for="email" class="col-4 col-sm-4">Name</label>
                         <input type="text" class="form-control col-sm-3 col-3" required id="fname" name="fname" placeholder="First Name" />&nbsp;
                         <input type="text" class="form-control col-sm-4 col-4" required id="lname" name="lname" placeholder="Last Name" />

                     </div>
                     <div class="form-group row">
                         <label for="type" class="col-4 col-sm-4">Mobile Number</label>
                         <input class="form-control col-sm-7 col-7" type="text" name="mobile_no">

                     </div>

                     <div class="form-group row">
                         <label for="email" class="col-4 col-sm-4">Email</label>
                         <input type="email" class="form-control col-sm-7 col-7" required id="email" name="email_id" placeholder="Email" />
                     </div>


                     <div class="form-group row">
                         <label for="type" class="col-4 col-sm-4">Password</label>
                         <input class="form-control col-sm-7 col-7" type="password" required name="pass" id="pass">
                         <label id="message1" class="col-4 col-sm-4 text-danger"></label>

                     </div>
                     <div class="form-group row">
                         <label for="type" class="col-4 col-sm-4"> Confirm Password</label>
                         <input class="form-control col-sm-7 col-7" type="text" name="cpassword" required id="cpass">
                         <label id="message2" class="col-7 col-sm-7 text-danger"></label>
                     </div>

                     <div class="form-group">
                         <button class="btn btn-success offset-4" id="save" name="save">Register</button>
                         <a href="" class="h6 offset-1 text-primary" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Back To Login</a>
                     </div>
                 </form>

             </div>

             <!-- Modal footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>


 <?php
    if (isset($_POST['save'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email_id'];
        $mobile_no = $_POST['mobile_no'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if ($pass  != $cpass) {
            echo "<script>alert('Password Does not Match');
              window.location='./index.php'
              </script>";
        }

        $sql = "insert into register(fname,lname,mobile_no,password,email_id) values('$fname','$lname','$mobile_no','$pass','$email')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>alert('Register successfull..');
              window.location='./index.php'
              </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
    if (isset($_POST['login'])) {

        $email = $_POST['email_id'];
        $_SESSION['email'] = $email;
        $pass = $_POST['pass'];
        $sql = "Select * from register where email_id='$email' and password = '$pass'";
        $res = mysqli_query($conn, $sql);
        if ($res) {

            echo "<script>alert('Login successfull..');
              window.location='./customer/home.php'
              </script>";
        } else {
            echo mysqli_error($conn);
        }
    }

    ?>


 <script>
     //  function checkStrength(password) {
     //      var strength = 0
     //      if (password.length < 6) {
     //          $('#message2').removeClass()
     //          $('#message2').addClass('short')
     //          return 'Too short'
     //      }
     //      if (password.length > 7) strength += 1
     //      // If password contains both lower and uppercase characters, increase strength value.
     //      if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
     //      // If it has numbers and characters, increase strength value.
     //      if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
     //      // If it has one special character, increase strength value.
     //      if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
     //      // If it has two special characters, increase strength value.
     //      if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
     //      // Calculated strength value, we can return messages
     //      // If value is less than 2
     //      if (strength < 2) {
     //          $('#message2').removeClass()
     //          $('#message2').addClass('weak')
     //          return 'Weak'
     //      } else if (strength == 2) {
     //          $('#message2').removeClass()
     //          $('#message2').addClass('good')
     //          return 'Good'
     //      } else {
     //          $('#message2').removeClass()
     //          $('#message2').addClass('strong')
     //          return 'Strong'
     //      }
     //  }
     //  });
     //  Reference: Link one of the best example
     //  for you i hope you understand.

     //  Share
     //  Improve this answer
 </script>