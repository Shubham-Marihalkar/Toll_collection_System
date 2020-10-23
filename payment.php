<?php

	include('database.php');
	include('session.php');
	extract($_POST);
//payment entry
if(isset($_POST['starting_point']) && isset($_POST['destination']) && isset($_POST['otp']) && isset($_POST['vname']) && isset($_POST['vtype']) && isset($_POST['vnumber'])) 
{
	$vname=$_POST['vname'];
	$vtype=$_POST['vtype'];
	$vnumber=$_POST['vnumber'];
	$starting_point=$_POST['starting_point'];
	$destination=$_POST['destination'];
	$otp=$_POST['otp'];
	$status="pending";
	//compare otp logic here

	$query = " INSERT INTO vehical_entry(userid, vname, vtype, vnumber,starting_point,destination,status) VALUES ( $rowid,  '$vname', '$vtype', '$vnumber','$starting_point','$destination','$status') ";
	mysqli_query($link,$query);
}

?>