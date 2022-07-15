<!--  This is the HTML Page section fetches all the replies made by the students for different assignments  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <center><h3>All Replies</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"announcement_center");
    /* Gets all the information from the table notince*/
    $query = 'select * from replies';
    $query_run = mysqli_query($connection,$query);
    /* Gets all the relevant information from the table notice and replies where announcmentid in replies table = notice id in notice table */
    $query2 = 'select n.subject,n.id,r.anc_id from notice n, replies r where r.anc_id = n.id';
    $query2_run = mysqli_query($connection,$query2);
    while($row = mysqli_fetch_assoc($query_run)){
        $row2 = mysqli_fetch_assoc($query2_run)
        ?>
        <div class="card">
          <div class="card-body">
            <p class="card-text">For Announcement: <?php echo $row2['subject'];?></p>
            <h5 class="card-title"><?php echo $row['email'];?></h5>
            <p class="card-text"><?php echo $row['reply'];?></p>
          </div>
        </div>
        <p></p>
        <?php
    }
    ?>
  </body>
</html>
