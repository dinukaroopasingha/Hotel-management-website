<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<body>
<?php session_start();


if(isset($_SESSION['name'])){
    $cusname = $_SESSION['name'];
}
?>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Room Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form  action="rooms_core.php" method="post">
              <!-- <div class="mb-3">
                  <label for="adname" class="form-label fw-bold">Admin Name</label>
                  <input type="text" value="" name="adname" id="adname" class="form-control" placeholder="" aria-describedby="helpId" >
              </div> -->
              <label style="font-weight: bold;" for="rooms" class="form-label">Set amount of rooms:</label>
              <div name="rooms" style="display: flex; flex-direction: row; flex-wrap: wrap;" class="mb-3 col-12">
                  <div id="" style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="no_of_king_rooms" class="form-label">Number of King Size Rooms:</label>
                      <input style="width: 40px;height: 40px;" type="text" name="no_of_king_rooms" id="no_of_king_rooms">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="no_of_queen_rooms" class="form-label">Number of Queen Size Rooms:</label>
                      <input style="width: 40px;height: 40px;" type="text" name="no_of_queen_rooms" id="no_of_queen_rooms">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="no_of_wedding_rooms" class="form-label">Number of Wedding Suits:</label>
                      <input style="width: 40px;height: 40px;" type="text" name="no_of_wedding_rooms" id="no_of_wedding_rooms">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                    <label for="no_of_rec_halls" class="form-label">Number of Reception Halls:</label>
                    <input style="width: 40px;height: 40px;" type="text" name="no_of_rec_halls" id="no_of_rec_halls">
                  </div>
              </div>
          
              <label style="font-weight: bold;" for="" class="form-label">Set prices for rooms:</label>
              <div name="rooms" style="display: flex; flex-direction: row; flex-wrap: wrap;" class="mb-3 col-12">
                  <div id="" style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="price_ofa_king_room" class="form-label">Price of a King Size Room:</label>
                      <input style="width: 80px;height: 40px;" placeholder="Rs:" type="text" name="price_ofa_king_room" id="price_ofa_king_room">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="price_ofa_queen_room" class="form-label">Price of a Queen Size Rooms:</label>
                      <input style="width: 80px;height: 40px;" placeholder="Rs:" type="text" name="price_ofa_queen_room" id="price_ofa_queen_room">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                      <label for="price_ofa_wedding_room" class="form-label">Price of a Wedding Suits:</label>
                      <input style="width: 80px;height: 40px;" placeholder="Rs:" type="text" name="price_ofa_wedding_room" id="price_ofa_wedding_room">
                  </div>
                  <div style="    display: flex;justify-content: space-between;align-items: center; padding-right: 20px;" class="mb-3 col-6">
                    <label for="price_ofa_rec_hall" class="form-label">Price of a Reception Halls:</label>
                    <input style="width: 80px;height: 40px;" placeholder="Rs:" type="text" name="price_ofa_rec_hall" id="price_ofa_rec_hall">
                  </div>
              </div>
              <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                  <button type="submit" class="btn btn-dark">Check Out</button>
              </div>
        </form>
      </div>

    </div>
  </div>
</div>

</body>
</html>