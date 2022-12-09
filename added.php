<?php 
  require 'file/connection.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lifeline</title>
</head>

<?php include 'head.php'?>
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
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="index.php" method="post">
                                            <?php 
                                            if(isset($_POST['name'])){
                                            $name = $_POST["name"];    
                                            $guardiansname = $_POST["guardiansname"];
                                            $gender = $_POST["gender"];
                                            $dob = $_POST["dob"];
                                            $weight = $_POST["weight"];
                                            $bloodgroup = $_POST["bloodgroup"];
                                            $plasma = $_POST["plasmadonor"];
                                            $email = $_POST["email"];
                                            $address = $_POST["address"];
                                            $contact = $_POST["contact"];
                                            $username = $_POST["username"];
                                            $password = $_POST["password"];

                                            include 'file/connection.php';
                                            $qry = "insert into donor(name,guardiansname,gender,dob,weight,bloodgroup,plasma,email,address,contact,username,password) values ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$plasma','$email','$address','$contact', '$username', '$password')";
                                            $result = mysqli_query($conn,$qry); 

                                                if(!$result){
                                                    echo"ERROR";
                                                }
                                                else{
                                                    echo"<h1>ADDED SUCCESSFULLY</h1>";
                                                }
                                            }
                                            else{
                                                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
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
