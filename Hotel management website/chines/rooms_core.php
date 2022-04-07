<?php

require_once 'conn.php';
session_start();

$no_of_king_rooms=$_POST['no_of_king_rooms'];
$no_of_queen_rooms=$_POST['no_of_queen_rooms'];
$no_of_wedding_rooms=$_POST['no_of_wedding_rooms'];
$no_of_rec_halls=$_POST['no_of_rec_halls'];

$price_ofa_king_room=$_POST['price_ofa_king_room'];
$price_ofa_queen_room=$_POST['price_ofa_queen_room'];
$price_ofa_wedding_room=$_POST['price_ofa_wedding_room'];
$price_ofa_rec_hall=$_POST['price_ofa_rec_hall'];


$insert = "UPDATE rooms
SET no_of_king_rooms='$no_of_king_rooms', 
price_ofa_king_room='$price_ofa_king_room', 
no_of_queen_rooms='$no_of_queen_rooms',
price_ofa_queen_room='$price_ofa_queen_room',
no_of_wedding_rooms='$no_of_wedding_rooms',
price_ofa_wedding_room='$price_ofa_wedding_room',
no_of_rec_halls='$no_of_rec_halls',
price_ofa_rec_hall='$price_ofa_rec_hall'
WHERE record_number =1 ";

if (!$conn) {
    die(
      "Connection failed: " . mysqli_connect_error()
    );
  
  }


if (mysqli_query($conn, $insert)) 
{
  // $_SESSION['cus_name'] = "$cus_name";
  header('location:index.php');
}
else {
  $_SESSION['status'] ="Error creating database: " . mysqli_error($conn);
  // $_SESSION['color'] = "danger";

  header('location:index.php');
}

mysqli_close($conn);

?>