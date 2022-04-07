<?php

require_once 'conn.php';
session_start();

$email=$_POST['email'];
$uname=$_POST['uname'];
$p_no=$_POST['p_no'];
$password_=$_POST['pword'];

$select_ad="SELECT * FROM admin_";
$retrieve = mysqli_query($conn,$select_ad);
$ad=mysqli_fetch_assoc($retrieve);

$check_ad = substr($uname, 0, 6);
$check_band = substr($uname, 0, 5);
if ($check_ad == "ADMIN-" ){
  if ($ad==null)
  {
    $insert = "INSERT INTO admin_(admin_uname,admin_pword,admin_email,admin_pno) VALUES('$uname','$password_','$email','$p_no');";
  }
  else {
    $sign_status = "You can't be a admin";
  }

}
else if($check_band == "BAND-"){
  $insert = "INSERT INTO band(band_name,band_pword,band_email,band_contact_number) VALUES('$uname','$password_','$email','$p_no');";
  $sign_status = "Your band is successfully registered";
}
else{
  $insert = "INSERT INTO signup(email,username,p_no,password_) VALUES('$email','$uname','$p_no','$password_');";
  $sign_status = "You are registered successfully";
}





if (!$conn) {
    die(
      "Connection failed: " . mysqli_connect_error()
    );
  
  }


if (mysqli_query($conn, $insert)) 
{
  $_SESSION['sign_status'] = $login_status;
  // $_SESSION['cus_name'] = "$cus_name";
  header("location:index.php");
}
else {
  $_SESSION['status'] ="Error creating database: "($conn);
  // $_SESSION['color'] = "danger";
  header('location:index.php');
}

mysqli_close($conn);

?>