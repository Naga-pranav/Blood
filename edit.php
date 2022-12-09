<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<?php include 'head.php' ?>
<body>
    <div id="wrapper">
        <?php include 'header.php'?>
        <div class="container jumbotron">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lifeline Admin</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                UPDATE REQUESTED
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="#" method="post">
                                            <?php
                                            include 'file/connection.php';
                                            $name = $_POST["name"];    
                                            $guardiansname = $_POST["guardiansname"];
                                            $gender = $_POST["gender"];
                                            $dob = $_POST["dob"];
                                            $weight = $_POST["weight"];
                                            $bloodgroup = $_POST["bloodgroup"];
                                            $email = $_POST["email"];
                                            $address = $_POST["address"];
                                            $contact = $_POST["contact"];
                                            $id=$_POST['id'];
                                            $qry = "update donor set name='$name', guardiansname='$guardiansname', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', email='$email', address='$address', contact='$contact' where id='$id'";
                                            $result = mysqli_query($conn,$qry); 

                                            if(!$result){
                                                echo"ERROR". mysqli_error();
                                            }else {
                                                echo"DETAILS SUCCESSFULLY UPDATED";
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
