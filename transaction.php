<?php
    include('database.php');
    include("includes\dbconfig.php");
    $referenceWifi = $database->getReference('/WiFiTx');
    $numbers = $referenceWifi->getValue();
    $vehical_numbers['WiFiTx']= $numbers;
    $referenceLifi = $database->getReference('/LiFiTx');
    $numbers = $referenceLifi->getValue();
    $vehical_numbers['LiFiTx']= $numbers;
    if(!(is_array($vehical_numbers['LiFiTx']) || is_array($vehical_numbers['WiFiTx']) ))
        $database->getReference('/threshold')->set(1);
    else
        $database->getReference('/threshold')->set(0);
   if(is_array($vehical_numbers['WiFiTx'])  && is_array($vehical_numbers['LiFiTx']))
        $pending=array_diff($vehical_numbers['WiFiTx'],$vehical_numbers['LiFiTx']);
    else
        $pending=[];
    if(isset($_SESSION['tollbooth']))
        $tollbooth=$_SESSION['tollbooth'];
    else
        $tollbooth="ERROR";
    if(is_array($vehical_numbers['LiFiTx']))
    {
        foreach($vehical_numbers['LiFiTx'] as $key => $vnumber)
        {
            $sql = "SELECT * ,count(*) as count FROM vehical_registry where vnumber='$vnumber'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
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
            else if($row['count']==0)
            {
                $query1 = " INSERT INTO vehicle_fined(vnumber, toll_booth, fine_imposed,status) VALUES ( '$vnumber','$tollbooth', 1000, 'PENDING') ";
                mysqli_query($link,$query1);
            }
        }   
    }
    if(is_array($vehical_numbers['WiFiTx']))
    {
        foreach($pending as $key => $vnumber)
        {
            $sql = "SELECT * ,count(*) as count FROM vehical_registry where vnumber='$vnumber'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row['count']==1)
            {
                $rowid=$row['userid'];
                $vnumber=$row['vnumber'];
                $amount=1000;
                $query = " INSERT INTO pending_transactions(userid, vnumber, status,toll_booth,fine_imposed) VALUES ( $rowid,  '$vnumber', 'in_queue','$tollbooth',$amount) ";
                mysqli_query($link,$query);
            }
            else if($row['count']==0)
            {
                $query1 = " INSERT INTO vehicle_fined(vnumber, toll_booth, fine_imposed,status) VALUES ( '$vnumber','$tollbooth', 1000, 'PENDING') ";
                mysqli_query($link,$query1);
            }
        }   
        $referenceLifi->remove();
        $referenceWifi->remove();
    }
?>