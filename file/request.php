<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['rid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['requestb'])){
		$hid = $_POST['hid'];
		$rid = $_SESSION['rid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM bloodrequest where hid='$hid' and rid='$rid'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already requested for blood sample from this Hospital.';
			header( "location:../abs.php?error=".$error );
		}
		else{
			$sql="INSERT INTO bloodrequest (bg, hid, rid) VALUES ('$bg', '$hid', '$rid')";
			if ($conn->query($sql) === TRUE) {
				$msg = 'You have requested for blood group '.$bg.'. Our team will contact you soon.';
				header( "location:../sentrequest.php?msg=".$msg);
			} 
			else {
				$error = "Error: " . $sql . "<br>" . $conn->error;
				header( "location:../abs.php?error=".$error );
			}
			$conn->close();
		}
	}
	else{
		$hid = $_POST['hid'];
		$rid = $_SESSION['rid'];
		$bg = $POST_['bg'];
		$pd = $_POST['pd'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM plasmarequest where hid='$hid' and rid='$rid'");
		
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already requested for plasma sample from this Hospital.';
			header( "location:../abs.php?error=".$error );
		}
		else{
			$sql="INSERT INTO plasmarequest (pd, hid, rid) VALUES ('$pd', '$hid', '$rid')";
			if ($conn->query($sql) === TRUE) {
				$msg = 'You have requested for plasma of blood group'.$bg.'. Our team will contact you soon.';
				header( "location:../sentprequest.php?msg=".$msg);
			} 
			else {
				$error = "Error: " . $sql . "<br>" . $conn->error;
				header( "location:../abs.php?error=".$error );
			}
			$conn->close();
		}

	}
}
?>