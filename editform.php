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
    <title>Edit Form</title>

</head>
<?php include 'head.php' ?>
<body>



    <div id="wrapper">

        <?php include 'header.php'?>

        <div id="page-wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">Edit Donor's Detail</h1>
                </div>
                    </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please make your changes by updating the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                
                                <?php
                                    include 'file/connection.php';
                                    $id=$_GET['id'];
                                    $qry= "select * from donor where id='$id'";
                                    $result=mysqli_query($conn,$qry);
                                    while($row=mysqli_fetch_array($result)){
    
                                ?>         
                                <div class="container"><form role="form" action="edit.php" method="post">
                                     
                                     <div class="form-group">
                                         <label>Enter Full Name</label>
                                         <input class="form-control" name="name" type="text" value='<?php echo $row['name']; ?>' required>
                                         <p class="help-block">Example:Harry Den</p>
                                     </div>
                                     <div class="form-group">
                                         <label>Enter Guardian's Name</label>
                                         <input class="form-control" type="text" name="guardiansname" value='<?php echo $row['guardiansname']; ?>' required>
                                     </div>
                                     
                                     <div class="form-group">
                                         <label>Gender [ M/F ]</label>
                                         <input class="form-control" type="text" name="gender" value='<?php echo $row['gender']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter D.O.B</label>
                                         <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter Weight</label>
                                         <input class="form-control" type="number" name="weight" value='<?php echo $row['weight']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter Blood Group</label>
                                         <input class="form-control" type="text" name="bloodgroup" value='<?php echo $row['bloodgroup']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Viable plasma donor?</label>
                                         <input class="form-control" type="text" name="plasmadonor" value='<?php echo $row['plasma']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter Email Id</label>
                                         <input class="form-control" type="email" name="email" value='<?php echo $row['email']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter Address</label>
                                         <input class="form-control" type="text" name="address" value='<?php echo $row['address']; ?>' required>
                                     </div>

                                     <div class="form-group">
                                         <label>Enter Contact Number</label>
                                         <input class="form-control" type="number" name="contact" value='<?php echo $row['contact']; ?>' required>
                                     </div>

 <input type="hidden" name="id" value="<?php echo $row['id'];?>">              
                                 
                             
                                     
             
                                 
                                 <button type="submit" class="btn btn-success">Make Changes</button>
                                 </form></div>                           
                                    
                                </div>
    <?php
}
?>
                                
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