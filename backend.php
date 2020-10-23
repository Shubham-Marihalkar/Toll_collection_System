	<?php

include"database.php";
include('session.php');
extract($_POST);

//adding records in database
//add vehicle
if(isset($_POST['vname']) && isset($_POST['vtype']) && isset($_POST['vnumber']) ) 
{
	$vname=$_POST['vname'];
	$vtype=$_POST['vtype'];
	$vnumber=$_POST['vnumber'];
	//compare otp logic here

	$query = " INSERT INTO vehical_registry(userid, vname, vtype, vnumber) VALUES ( $rowid,  '$vname', '$vtype', '$vnumber') ";
	mysqli_query($link,$query);
}



/*if(isset($_POST['productname']) &&  isset($_POST['quantity']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image']))
	{
		echo "connection";
		$query = " INSERT INTO `product`( `productname`, `quantity`, `type`, `price`,`image`) VALUES('$productname', '$quantity', '$type', '$price','$image' )   ";

		if($result = mysqli_query($conn,$query)){
			exit(mysqli_error());
		}else{
			echo "1 record added";
		}


	}*/
	// pass id on modal
if($rowid != "")
{
    $query = "SELECT * FROM vehical_registry WHERE userid = '$rowid'";
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

/////////////Delete user record /////////

if(isset($_POST['deleteid']))
{

	$user_id = $_POST['deleteid']; 

	$deletequery = " delete from product where productid ='$user_id' and farmerid='$rowid' ";
	if (!$result = mysqli_query($link,$deletequery)) {
        exit(mysqli_error());

}

}

?>








