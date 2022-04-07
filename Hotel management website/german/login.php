<?php

require_once 'conn.php';
session_start();


$log_uname = $_POST['uname'];

$log_pword = $_POST['pword'];


$check_ad = substr($log_uname, 0, 6);
if ($check_ad == "ADMIN-"){
  $select = "SELECT admin_uname,admin_pword FROM admin_ WHERE ad_index=1";
  $login_status = "You are successfully logged as admin";
  $retrieve = mysqli_query($conn,$select);
  $record = mysqli_fetch_assoc($retrieve);
  if($record==null){
    $login_status="Before the login, you want to register as a admin";
  }
}
else{
  $select = "SELECT password_	,username FROM signup WHERE username='$log_uname'";
  $login_status = "You are logged successfully";
  $retrieve = mysqli_query($conn,$select);
  $record = mysqli_fetch_assoc($retrieve);
}




if (!$conn) {
    die(
      "Connection failed: " . mysqli_connect_error()
    );
  
  }



if (mysqli_query($conn, $select)==true) 
{
  $name=$record['username'];
  $_SESSION['login_status'] = $login_status;
//   $_SESSION['color'] = "success";
  $_SESSION['name'] = $name;
  header("location:index.php");
}
else {
//   $_SESSION['status'] ="Login Failed!";
//   $_SESSION['color'] = "danger";
  // header("location:login.php");
}

mysqli_close($conn);

?>














