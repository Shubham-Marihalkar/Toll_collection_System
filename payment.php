<?php

	include('database.php');
	include('session.php');
	extract($_POST);
//payment entry
if(isset($_POST['tollbooth'])  && isset($_POST['vname']) && isset($_POST['vtype']) && isset($_POST['vnumber'])) 
{
	$vname=$_POST['vname'];
	$vtype=$_POST['vtype'];
	$vnumber=$_POST['vnumber'];
	$tollbooth=$_POST['tollbooth'];
	$otp=isset($_POST['otp'])?$_POST['otp']:0;
	$status="pending";
	//compare otp logic here
	$query = " INSERT INTO vehical_entry(userid, vname, vtype, vnumber,status,toll_booth) VALUES ( $rowid,  '$vname', '$vtype', '$vnumber','$status','$tollbooth') ";
	$res=mysqli_query($link,$query);
	echo mysqli_fetch_array($res,MYSQLI_ASSOC);
}

?>