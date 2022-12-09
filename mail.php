<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id && bg LIKE '%$searchKey%'";
}else{
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id";
}
$result = mysqli_query($conn, $sql);
?>
<?php
    require 'file/connection.php';
    $qqry="SELECT bg, count(*) as number FROM bloodinfo GROUP BY bg";
    $ressult= mysqli_query($conn,$qqry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Request</title>
    <?php require 'head.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require 'header.php'; ?>
<?php echo'
<div id="form">
  <form action="send.php" method="post" enctype="multipart/form-data">

    <label for="fname">Email</label>
    <input type="email" id="fname" name="email" placeholder="Send to..">

    <label for="lname">Subject</label>
    <input type="text" id="lname" name="subject" placeholder="Enter subject">

    <label for="text">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <button type="submit" name="send">Send</button>

  </form>
</div>'?>
</body>
</html>

