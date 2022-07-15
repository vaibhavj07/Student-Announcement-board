<?php
/* The following section of code
       will update the profile of the user */
session_start();
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"announcement_center");
  /* Updates the database users */
  $query = "update users set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',password='$_POST[password]',course='$_POST[course]' where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'Dashboard_user.php'
    </script>";
  }

}
/* The following section of code
       will send a reply to the professor */
if(isset($_POST['send_reply'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"announcement_center");
  /* inserts into the database replies */
  $query = "insert into replies values (null,$_SESSION[id],'$_SESSION[email]','$_POST[reply]')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Replied successfully...');
    window.location.href = 'Dashboard_user.php'
    </script>";
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'admin_dashboard.php';
    </script>";
  }

}
?>

<!--
         This is the HTML Page section of the User Dashboard
      -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>
  <!-- Navigaets to the different php files on clicking the different button  -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_announcement.php');
        });

      });
    </script>
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
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
          <img src="images/img.png" class="img-rounded" width="200px" height="200px">
          <b><?php echo $_SESSION['email'];?></b><hr>
          <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View Announcements</button>
          <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome</h2>
          <p>
          View all course related announcement, Manage Profile and Reply to Announcement from One place.</p>
        </div>
      </div>
    </section>
  </body>
</html>
