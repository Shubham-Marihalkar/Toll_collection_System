<?php
    //throgh realtime received values
    include('database.php');
    include("includes\dbconfig.php");
    $reference = $database->getReference('/');
    $vehical_numbers = $reference->getValue();
    if(count($vehical_numbers)>0)
    {
        foreach($vehical_numbers as $key => $vnumber)
        {
            // echo $vnumber;
            $sql = "SELECT * FROM vehical_registry where vnumber='$vnumber'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row)
            {
                $rowid=$row['userid'];
                $vname=$row['vname'];
                $vtype=$row['vtype'];
                $vnumber=$row['vnumber'];
                $starting_point="test_source";
                $destination="test_dest";
                $status="pending";
                $query = " INSERT INTO vehical_entry(userid, vname, vtype, vnumber,starting_point,destination,status) VALUES ( $rowid,  '$vname', '$vtype', '$vnumber','$starting_point','$destination','$status') ";
                mysqli_query($link,$query);
            }
        }   
        $reference->remove();
    }
?>
