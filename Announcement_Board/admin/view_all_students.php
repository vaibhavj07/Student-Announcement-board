<!--  This is the HTML Page section that fetches all the information about the students enrolled in different courses on the webapplication -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Students</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"announcement_center");
    /* Gets all the information of all the students regsitered on the web application*/
    $query = 'select * from users';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
       <div class="card" style=" height: 200px">
          <div class="card-body">
            <p class="card-text"> <b>Name:</b> <?php echo $row['firstname'];?> <?php echo $row['lastname'];?></p>
            <p class="card-text"> <b>Email:</b> <?php echo $row['email'];?></p>
            <p class="card-text"> <b>Student ID:</b> <?php echo $row['studentid'];?></p>
            <p class="card-text"> <b>Course:</b> <?php echo $row['course'];?></p>
          </div>
        </div>
        <p></p>

      <?php
    }
    ?>
  </body>
</html>
