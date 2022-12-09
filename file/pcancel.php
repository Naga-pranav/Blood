<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from plasmarequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have cancelled request for the blood.";
	header("location:../sentprequest.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../sentprequest.php?error=".$error );
    }
    mysqli_close($conn);
?>