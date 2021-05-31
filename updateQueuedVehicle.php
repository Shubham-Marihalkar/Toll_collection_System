<?php
    include('database.php');
    //update status of queued  vehicles after 30 min to Fined
$sql = "SELECT * FROM pending_transactions";
$result = mysqli_query($link,$sql);
while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{  
    $vehiclePassTime = new DateTime($row['source_updated_at']);
    $currentTime = new DateTime();//end time
    $interval = $vehiclePassTime->diff($currentTime);
    $id=$row['id'];
    $fine_imposed=1000;
    if($interval->format('%i')>=30 && $row['status']=='in_queue')
    {  
        $query = " UPDATE pending_transactions SET status='Fined',fine_imposed=$fine_imposed WHERE id=$id ";
        mysqli_query($link,$query);
    }
}
?>