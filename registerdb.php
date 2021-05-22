<?php
include 'database.php';
// Escape user inputs for security
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];
$type=$_POST['type'];
$sq=$_POST['securityqst'];
$sa=$_POST['securityans'];
//$password=hash('sha1','$password',FALSE);
// Attempt insert query execution
 if ($type=='admin') {
	$tollboothid=$_POST['tollbooth'];
	$sql1="SELECT * FROM tollbooths WHERE $tollboothid=tollboothid";
	$result1 = mysqli_query($link,$sql1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
	$tollbooth=$row1['location'];
 	$sql = "INSERT INTO admins (firstname, phoneno,password,securityqst,securityans,username,lastname,tollboothid,tollbooth) VALUES ('$firstname','$phoneno','$password','$sq','$sa','$username','$lastname','$tollboothid','$tollbooth')";
 }else if($type=='user'){
 	$sql = "INSERT INTO users (firstname, phoneno,password,securityqst,securityans,username,lastname) VALUES ('$firstname','$phoneno','$password','$sq','$sa','$username','$lastname')";
 }
 else
 	header("Location:register.php");
if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
	header("Location:login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
//mysqli_close($link);
?>
