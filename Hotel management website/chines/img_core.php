<?php

require_once 'conn.php';
print_r($_FILES);
$temp_name =file_get_contents($_FILES['img']['tmp_name']);

$encode_data=base64_encode($temp_name);
echo $encode_data;

// $query = "INSERT INTO upload() VALUES('$file_name')";
// $res = mysqli_query($conn,$query);
// if ($res) {
//     move_uploaded_file()
// }

?> 