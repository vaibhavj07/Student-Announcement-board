<!--  This is the HTML Page section for posting an announcement for the students for different courses.  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Post an Announcement</title>
  </head>
  <body>
      <center><h3>Announcement Form</h3></center>
      <br>
      <div>
        <form action="" method="post">
          <div class="form-group">
              <label>Announcement For: </label>
              <select class="form-control" name="to_whom">
                <option>-Select-</option>
                <option>To All</option>
                <option>Network Computing</option>
                <option>Knowledge Discovery and Data Mining</option>
                <option>Cloud Computing</option>
                <option>Network Security</option>
              </select>
          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Announcement Subject">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary"name="send_notice">Post Announcement</button>
        </form>
      </div>
  </body>
</html>
