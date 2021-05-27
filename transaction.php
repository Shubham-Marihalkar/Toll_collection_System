<?php
    //throgh realtime received values
    include('database.php');
    include("includes\dbconfig.php");
    $reference = $database->getReference('/');
    // while(1){
        $vehical_numbers = $reference->getValue();
        if(is_array($vehical_numbers)>0)
        {
            foreach($vehical_numbers as $key => $vnumber)
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
            $reference->remove();
        }
    // }
?>
