<?php

require_once 'conn.php';
session_start();

$cusname=$_POST['cusname'];
$king_rooms=$_POST['king_rooms'];
$queen_rooms=$_POST['queen_rooms'];
$wedding_rooms=$_POST['wedding_rooms'];
$rec_halls=$_POST['rec_halls'];
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];


$diff = abs(strtotime($to_date) - strtotime($from_date));

$days = floor($diff / (60*60*24));
$select = "SELECT price_ofa_king_room, price_ofa_queen_room,price_ofa_wedding_room,price_ofa_rec_hall  FROM rooms WHERE record_number=1";
$retrieve = mysqli_query($conn,$select);
$por=mysqli_fetch_assoc($retrieve);

$cost=(($king_rooms * $por['price_ofa_king_room']) + ($queen_rooms * $por['price_ofa_queen_room']) + ($wedding_rooms * $por['price_ofa_wedding_room']) + ($rec_halls * $por['price_ofa_rec_hall'])) * $days;

$insert = "INSERT INTO booking(cusname,king_rooms,queen_rooms,wedding_rooms,rec_halls,from_date,to_date) VALUES('$cusname','$king_rooms','$queen_rooms','$wedding_rooms','$rec_halls','$from_date','$to_date');";

if (!$conn) {
    die(
      "Connection failed: " . mysqli_connect_error()
    );
  
  }


if (mysqli_query($conn, $insert)) 
{
  // $_SESSION['cus_name'] = "$cus_name";
  header("location:pay.php?id=".$cost);
}
else {
  $_SESSION['status'] ="Error creating database: " . mysqli_error($conn);
  // $_SESSION['color'] = "danger";

  header('location:pay.php');
}

mysqli_close($conn);

?>