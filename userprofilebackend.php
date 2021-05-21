<?php

include("database.php");
include('session.php');
//extract($_POST);


if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['username']))
{
    // get value
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $phoneno= $_POST['phoneno'];
    $securityqst= $_POST['securityqst'];
    $securityans = $_POST['securityans'];
    $password = $_POST['password'];
    $query = "UPDATE users SET firstname = '$firstname',lastname = '$lastname',  phoneno = '$phoneno', securityqst = '$securityqst' ,securityans='$securityans',password = '$password' WHERE username = '$username'";
    if (!$result = mysqli_query($link,$query)) {
        header("location: dashboarduser.php");
        exit(mysqli_error());
    }
    else
    	header('profile.php');
}



if($rowid != "")
{

    $query = "SELECT * FROM users WHERE userid = $rowid";
    if (!$result = mysqli_query($link,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }
  //  // agar ek bhi value nai milta hai tho data not found no. of rows 0 hai tho
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
   //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode(): 

    //echo json_encode($response);
}
// ye top wala id jo humhe mil raha hai uska hai jaha wo id check karega sahi hai ya nai agar nai tho invalid req boldega...
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
//////////////// update table//////////////

?>