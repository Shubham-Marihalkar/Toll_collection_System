
<?php
	include('database.php');
	$username=$_POST['username'];
	$securityqst=$_POST['securityqst'];
	$securityans=$_POST['securityans'];
	$password=$_POST['password'];
	$type=$_POST['type'];

 if ($type=='admin') {
 	
    $query2="SELECT * FROM admins WHERE username='$username' AND securityqst='$securityqst' AND securityans='$securityans'";
		$result2=mysqli_query($link,$query2);
    	$count2 = mysqli_num_rows($result2);
    	echo $count2;
    		if($count2==1)
			{
				$update="UPDATE admims SET password='$password' WHERE username='$username'";
				mysqli_query($link,$update);
				header("Location:login.php");
			}
			else{
				 echo '<script> alert("Invalid details provided\nRetry Again .");location.href= "forgot-password.html";</script>';
			}


	 }else if($type=='user'){
 		$query1="SELECT * FROM users WHERE username='$username' AND securityqst='$securityqst' AND securityans='$securityans'";
		$result1=mysqli_query($link,$query1);
	    $count1 = mysqli_num_rows($result1);
		if ($count1==1) {
			$update="UPDATE users SET password='$password' WHERE username='$username'";
			mysqli_query($link,$update);
			header("Location:login.php");
		}
		else{
			 echo '<script> alert("Invalid details provided\nRetry Again .");location.href= "forgot-password.html";</script>';
		}
			
 	}
 else
 	header("Location:forgot-password.html");

	

	

?>
