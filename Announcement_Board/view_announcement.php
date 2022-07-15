<!-- This section contains the HTML code for the View Announcment Page -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>Announcement for you</h3></center><br>
    <?php
    /* This section of code gets all announcment from the table notice for a corresponding course or announcment meant for all.*/
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"announcement_center");
    $query = "select * from notice where to_whom = 'To All' OR to_whom = '$_SESSION[course]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $_SESSION['id'] = $row['id'];
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['subject'];?></h5>
          <p class="card-text"><?php echo $row['message'];?></p>
        <form action="" method="post">
          <div class="form-group">
            <!-- This section contains the HTML code for the reply to the Announcment section -->
            <p class="card-text">Reply: </p>
            <center><textarea style="width: 900px" name="reply" rows="3" cols="60" class="form-control" placeholder="Type your reply..."></textarea><center>
      </div>
            <p></p>
            <button type="submit" class="btn btn-primary"name="send_reply">Reply</button>
          </div>
        </form>
      </div>
      <p></p>
      <?php
    }
    ?>
  </body>
</html>
