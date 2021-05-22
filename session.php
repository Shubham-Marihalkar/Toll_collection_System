<?php
   include('database.php');
   session_start();
   if(isset( $_SESSION['login_user']))
   {
      $user_check = $_SESSION['login_user'];
      
      $ses_sql = mysqli_query($link,"select username,userid from users where username = '$user_check' ");
      
      $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      
      $login_session = $row['username'];
      $rowid = $row['userid'];
      //echo $login_session;

      $sesid = mysqli_query($link,"select userid from users where username = '$user_check'");

      $row1=mysqli_fetch_array($sesid,MYSQLI_ASSOC);
   }
   else if(isset( $_SESSION['login_admin']))
   {
      $admin_check = $_SESSION['login_admin'];
      
      $ses_sql = mysqli_query($link,"select username,adminid,tollboothid from admins where username = '$admin_check' ");
      
      $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      
      $login_session = $row['username'];

      $rowid = $row['adminid'];
      $tollboothid=$row['tollboothid'];
      //echo $login_session;

      $sesid = mysqli_query($link,"select adminid from admins where username = '$admin_check'");

      $row1=mysqli_fetch_array($sesid,MYSQLI_ASSOC);
   }

   else{
      header("location:login.php");
      die();
   }
?>