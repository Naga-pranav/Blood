<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update plasmarequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../plasmarequest.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../plasmarequest.php?error=".$error );
    }
    mysqli_close($conn);
?>