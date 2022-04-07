<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
  <?php
  $cost = $_REQUEST['id'];
  ?>
<div  style="display:block; opacity: 100;" class="modal fade" id="secondWindow" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">CheckOut</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="checkout.php" method="post">
                    <div class="mb-3">
                      <!-- <label for="" class="form-label"></label> -->
                      <input type="text" name="" id="" class="form-control" placeholder="Card Holder Name" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                            
                    <div class="mb-3">
                       <!-- <label for="" class="form-label"></label> -->
                       <input style="background-image:url(card.png); background-size: 60px auto;background-repeat: no-repeat; background-position: right 10px top 7px;" type="text" name="" id="" class="form-control" placeholder="Card Number" aria-describedby="helpId">
                       <!-- <small id="helpId" class="text-muted">Help text</small> -->
                     </div>
                            
                     <div style="display: flex;" class="col-12 mb-3">
                       <!-- <label for="" class="form-label"></label> -->
                       <div style="padding-right: 8px; width:50%;">
                           <input type="text" name="" id="" class=" form-control" placeholder="MM/YY" aria-describedby="helpId">
                       </div>
                       <div style="padding-left: 8px; width:50%;">
                           <input  type="text" name="" id="" class=" form-control" placeholder="000" aria-describedby="helpId">
                       </div>
                       <!-- <small id="helpId" class="text-muted">Help text</small> -->
                     </div>
                </form>
              </div>
              <div class="modal-footer" style="justify-content: center; display: flex; flex-direction: column;">
              <h3>LKR: 
                <?php echo $cost; ?>.00
              </h3>
              <br>
                <button class="btn btn-primary" onclick="firstWindow()" href="#" data-bs-target="#" data-bs-toggle="modal">PAY</button>
              </div>
            </div>
          </div>
  </div>
</body>
</html>