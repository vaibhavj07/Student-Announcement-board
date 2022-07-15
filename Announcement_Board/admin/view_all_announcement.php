<!--  This is the HTML Page section fetches all the announcments made by the admin  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Announcement</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"announcement_center");
  /* Gets all the information from the table notince*/
    $query = 'select * from notice';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['subject'];?></h5>
          <p class="card-text"><?php echo $row['message'];?></p>
        </div>
      </div>
      <p></p>
      <?php
    }
    ?>
  </body>
</html>
