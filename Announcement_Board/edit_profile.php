<?php
/* This section of code fetches the information of the user to be displayed on the update profile section*/
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"announcement_center");
  $firstname = "";
  $lastname = "";
  $email = "";
  $password = "";
  $course = "";
  /* gets the user details of users based on the email stored in the Session*/
  $query = "select * from users where email = '$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $password = $row['password'];
    $course = $row['course'];
  }
?>


<!--  This is the HTML Page section edit profile section and creates a form for the user to update the profile.  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>">
      </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
      <div class="form-group">
        <label>Select Class:</label>
        <select class="form-control" name="course" required>
          <option><?php echo $course;?></option>
          <option>Network Computing</option>
          <option>Knowledge Discovery and Data Mining</option>
          <option>Cloud Computing</option>
          <option>Network Security</option>
        </select>
      </div>
      <button type="submit" name="update_profile" class="btn btn-primary">Update</button>
    </form>
  </body>
</html>
