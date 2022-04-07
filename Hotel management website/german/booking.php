<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<body> -->
<?php 
// session_start();
require_once 'conn.php';
$select = "SELECT no_of_king_rooms, no_of_queen_rooms,no_of_wedding_rooms,no_of_rec_halls  FROM rooms WHERE record_number=1";
$retrieve = mysqli_query($conn,$select);
$nor=mysqli_fetch_assoc($retrieve);



$no_of_king_rooms=$nor['no_of_king_rooms'];
$no_of_queen_rooms=$nor['no_of_queen_rooms'];
$no_of_wedding_rooms=$nor['no_of_wedding_rooms'];
$no_of_rec_halls=$nor['no_of_rec_halls'];


if(isset($_SESSION['name'])){
    $cusname = $_SESSION['name'];
}

if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    
}

?>

<div id="body">
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#firstWindow">
    Launch static backdrop modal
  </button> -->


  <!-- Modal -->

  <div   style="" class="modal fade" id="firstWindow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div style="border-radius: 20px;" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Make your reservation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          
          <form id="client_form" action="booking_core.php" method="post" >
                <div class="mb-3">
                    <label for="cusname" class="form-label fw-bold">Customer Name</label>
                    <input type="text" value="<?php $cusname;?>" name="cusname" id="cusname" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>
                <label style="font-weight: bold;" for="" class="form-label">Select your room:</label>
                <div name="rooms" style="display: flex; flex-direction: row;" class="mb-3">
                    <div id="" style="display: flex;justify-content: space-evenly;align-items: center;" class="mb-3 col-3">
                        <label for="king_rooms" class="form-label">King Size Rooms</label>
                        <select class="form-control" style="width: fit-content; height: fit-content;" name="king_rooms" id="">
                          <option value="0"></option>
                          <?php 
                          $x=1;
                          do {
                              echo "<option value=".$x.">".$x."</option>" ;
                              $x++;
                            } while ($x <= $no_of_king_rooms);
                          ?>
                        </select>
                    </div>
                    <div style="display: flex;justify-content: space-evenly;align-items: center;" class="mb-3 col-3">
                        <label for="queen_rooms" class="form-label">Queen Size Rooms</label>
                        <select class="form-control" style="width: fit-content; height: fit-content;" name="queen_rooms" id="">
                        <option value="0"></option>
                          <?php 
                          $b=1;
                          do {
                              echo "<option value=".$b.">".$b."</option>" ;
                              $b++;
                            } while ($b <= $no_of_queen_rooms);
                          ?>
                        </select>
                    </div>
                    <div style="display: flex;justify-content: space-evenly;align-items: center;" class="mb-3 col-3">
                        <label for="wedding_rooms" class="form-label">Wedding Suits</label>
                        <select class="form-control" style="width: fit-content; height: fit-content;" name="wedding_rooms" id="">
                        <option value="0"></option>
                          <?php 
                          $c=1;
                          do {
                              echo "<option value=".$c.">".$c."</option>" ;
                              $c++;
                            } while ($c <= $no_of_wedding_rooms);
                          ?>
                        </select>
                    </div>
                    <div style="display: flex;justify-content: space-evenly;align-items: center;" class="mb-3 col-3">
                      <label for="roomtype" class="form-label">Reception Halls</label>
                      <select class="form-control" style="width: fit-content; height: fit-content;" name="rec_halls" id="">
                          <option value="0"></option>
                          <?php 
                          $d=1;
                          do {
                              echo "<option value=".$d.">".$d."</option>" ;
                              $d++;
                            } while ($d <= $no_of_rec_halls);
                          ?>
                      </select>
                    </div>
                </div>
                          
                <div>
                    <label style="font-weight: bold;"for="">Select your duration:</label>
                          
                    <div style="display: flex;justify-content: space-evenly;align-items: center;" class="mb-3 col-12">
                        <div class="mb-3 col-5">
                            <label for="from_date" class="form-label">From:</label>
                            <input type="date" name="from_date" id="from_date" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                          
                        <div class="mb-3 col-5">
                            <label for="to_date" class="form-label">To:</label>
                            <input type="date" name="to_date" id="to_date" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                          
                </div>
                <div class="modal-footer">
             <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
             <button  type="submit" onclick="secondWindow()" data-bs-target="#secondWindow" href="#" class="btn btn-dark">Check Out</button>
          </div>
          </form>


        </div>

      </div>
    </div>
  </div>


 

</div>



<!-- </body>
</html> -->