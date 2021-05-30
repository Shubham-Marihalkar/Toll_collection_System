<?php
   include('database.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      $type=$_POST['type']; 
      if($type=='admin') {
         $sql = "SELECT * FROM admins WHERE username = '$username' and password = '$password'";
         $result = mysqli_query($link,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         print_r($row);
         $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
         if($count == 1) {
         //session_register("username");
            $_SESSION['login_admin'] = $username;
            $_SESSION['tollbooth'] = $row['tollbooth'];
            header("location: dashboard_admin.php");
         }else {
         echo '<script> alert("Your Login Name or Password is invalid.");location.href= "login.php";</script>';
         }
      }
      else if ($type=='user') {
          $sql = "SELECT userid FROM users WHERE username = '$username' and password = '$password'";
         $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: dashboarduser.php");
      }else {
        echo '<script> alert("Your Login Name or Password is invalid.");location.href= "login.php";</script>';
      }
   }
      else{
         echo '<script> alert("Your Login Name or Password is invalid.");location.href= "login.php";</script>';
      }
   }
      

?>