<?php
/* This section of code is the register user php code and inserts the information into users table*/
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"announcement_center");

  if(isset($_POST['register'])){
    /* This section of code inserts the user information into users table*/
    $query = "insert into users values ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[course]',$_POST[studentid])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration Complete...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('There was an Error...Please try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!-- This section is HTML code for the register user page  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Notice Board System</title>
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
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- register form from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Register User<h4></center>
          <form action="" method="post">
            <div class="form-group">
              <lable>First Name:</label>
                <input class="form-control" type="text" name="firstname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
              <lable>Last Name:</label>
                <input class="form-control" type="text" name="lastname" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="form-group">
              <lable>Student Id:</label>
                <input class="form-control" type="text" name="studentid" placeholder="Enter your Student ID">
            </div>
            <div class="form-group">
              <lable>Select Your Course:</label>
                <select class="form-control" name="course">
                  <option>-Select-</option>
                  <option>Network Computing</option>
                  <option>Knowledge Discovery and Data Mining</option>
                  <option>Cloud Computing</option>
                  <option>Network Security</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <center><a href="index.php">Already a User? Login</a><center> <!-- Navigates to login -->
        </div>
      </div>
    </section>
  </body>
</html>
