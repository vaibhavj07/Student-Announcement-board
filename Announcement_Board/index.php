<?php
/* This section of code verifies if the user who is logging in has valid credentials or not*/
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"announcement_center");
/* Compares the user's id and password entered by the user against the users table*/
  if(isset($_POST['login'])){
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
      /* Saves Email Id and Course as the sessions*/
      $_SESSION['email'] = $_POST['email'];
      while($row = mysqli_fetch_assoc($query_run)){
        $_SESSION['course'] = $row['course'];
        echo "<script>
        window.location.href = 'Dashboard_user.php';
        </script>";
      }
    }
    else{
      echo "<script>alert('Please Enter correct email id and password');

      </script>";
    }
  }
?>
  <!--This section contains the Html code for the login page of the students -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Announcement Board</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body style = "background-image: url(https://www.callcentrehelper.com/images/stories/2006/02/loudspeaker-exclamation-760.jpg); background-size: 100% 100%">
    <!-- Header section code  -->
    <div class="row" id="header" style = "background-image: url(https://1.bp.blogspot.com/-sTxAHAxirGM/WVbAe2098nI/AAAAAAABENs/_I5sYMYgLOUzaIE7FfF4qdGX-hoAkq9SgCLcBGAs/s1600/Blog_20170624_113552.jpg);">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Announcement Center</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
            <!--This section contains the Html code for the login form of the students -->
          <center><h4>Login</h4></center>
          <form action="index.php" method="post">
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
          </form>
          <center><a href="register.php">Not a user? Click here to register</a><center>   <!--Navigates to the register user page -->
            <center><a href="admin/index.php"> Admin Login</a><center>  <!--Navigates to the admin login page -->
        </div>
      </div>
    </section>
  </body>
</html>
