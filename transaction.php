<?php
    //throgh realtime received values
    include('database.php');
    include("includes\dbconfig.php");
    $reference = $database->getReference('/');
    $vehical_numbers = $reference->getValue();
    // print_r($vehical_numbers['LiFiTx']);
    // echo "<br />";
    // print_r($vehical_numbers['WiFiTx']);
    // echo "<br />";
    // print_r(array_diff($vehical_numbers['WiFiTx'],$vehical_numbers['LiFiTx']));
    // $pending=array_diff($vehical_numbers['WiFiTx'],$vehical_numbers['LiFiTx']);
    if(is_array($vehical_numbers)>0)
    {
        foreach($vehical_numbers['LiFiTx'] as $key => $vnumber)
        {
            // echo $vnumber;
            $sql = "SELECT * ,count(*) as count FROM vehical_registry where vnumber='$vnumber'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            // print_r($vnumber);
            // print_r($row);
            if($row['count']==1)
            {
                $rowid=$row['userid'];
                $vname=$row['vname'];
                $vtype=$row['vtype'];
                $vnumber=$row['vnumber'];
                $status="PENDING";
                $query = " INSERT INTO vehical_entry(userid, vname, vtype, vnumber,toll_booth,status) VALUES ( $rowid,  '$vname', '$vtype', '$vnumber','$tollbooth','$status') ";
                mysqli_query($link,$query);
            }
            else if($row['count']==0 && $key!=0)
            {
                $res=$query1 = " INSERT INTO vehicle_fined(vnumber, toll_booth, fine_imposed,status) VALUES ( '$vnumber','$tollbooth', 1000, 'PENDING') ";
                mysqli_query($link,$query1);
            }
        }   

        foreach($pending as $key => $vnumber)
        {
            // echo $vnumber;
            $sql = "SELECT * ,count(*) as count FROM vehical_registry where vnumber='$vnumber'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            // print_r($vnumber);
            // print_r($row);
            if($row['count']==1)
            {
                $rowid=$row['userid'];
                $vnumber=$row['vnumber'];
                $query = " INSERT INTO pending_transaction(userid, vnumber, status,toll_booth) VALUES ( $rowid,  '$vnumber', 'in_queue','$tollbooth') ";
                mysqli_query($link,$query);
            }
            else if($row['count']==0 && $key!=0)
            {
                $res=$query1 = " INSERT INTO vehicle_fined(vnumber, toll_booth, fine_imposed,status) VALUES ( '$vnumber','$tollbooth', 1000, 'PENDING') ";
                mysqli_query($link,$query1);
            }
        }   
        $reference->remove();
    }
?>