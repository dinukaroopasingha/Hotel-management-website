<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="fontawesome/css/fontawesome.css"> -->
    <!-- <script src="fontawesome/js/fontawesome.js"></script> -->
    <script src="bootstrap.js"></script>
    

</head>
<body>
<?php session_start(); 
// echo $_SESSION['login_status'];
?>

    <nav id="navbar" class="navbar navbar-expand-sm navbar-light ">
        <div class="container-fluid">
          <a style="" class="navbar-brand" href="#">Dela Rose Garden</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div style="text-align: center;" class="collapse navbar-collapse" id="navbarSupportedContent">
          
            <ul class="col navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#contact">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Events</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <li><a class="dropdown-item" href="#">Offers</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <!-- <li><a class="dropdown-item" href="#">Bookings</a></li> -->
                </ul>
              </li>
              <?php

              if(isset($_SESSION['login_status']))
              {
                if($_SESSION['login_status']=="You are successfully logged as admin"){?>
                    <li class="nav-item">
                      <button style="background-color: transparent; border: none;margin:0; padding:0;" data-bs-toggle="modal" data-bs-target="#firstWindow">
                      <a  class="nav-link " href="#">
                        <img style="width:30px;height: auto; filter: invert(20%);" src="../imgs/key.png" alt="" srcset="">
                      </a>
                      </button>

                    </li>
                    <li class="nav-item">
                      <button  style="background-color: transparent; border: none;margin:0; padding:0;">
                      <a class="nav-link " href="#">
                        <img style="width: 25px;height: auto; filter: invert(20%);" src="../imgs/administrator.png" alt="" srcset="">
                      </a>
                      </button>

                    </li>
               <?php } ?>
             
             <?php }?>

             <?php
              if(isset($_SESSION['login_status']) and $_SESSION['login_status']=="You are logged successfully"){?>
                      <button style="background-color: transparent; border: none;margin:0; padding:0;" data-bs-toggle="modal" data-bs-target="#firstWindow">
                      <a  class="nav-link " href="#">
                        <img style="width:30px;height: auto; filter: invert(20%);" src="../imgs/key.png" alt="" srcset="">
                      </a>
                      </button>
             <?php }?>
            </ul>
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
    </nav>


    
<button id="top_btn" href="" class="nav-link btn btn-dark" style="">
<a style="width: fit-content; height: fit-content;" href="#navbar">
<img style="margin:10px; width: 20px; height:auto; filter: invert(100%);" src="../imgs/arrow-up-solid.svg" alt="" srcset="">
</a>
</button>

<?php
  require "booking.php";
  // require "pay.php";
?>
    
  <div id="home" style="display: flex; flex-wrap: wrap;">
    <div class="tri"> </div>
 
    <img class="tri position-absolute" style="z-index:0; filter: blur(px);" src="../imgs/img1.jpeg" alt="" srcset="">
    <!-- <div id="backdrop" style=""> </div> -->
    <div id="leadtxtback" style=""> </div>
    <div id="leadtxt" style="">
      <h1 id="res-h1" class="slide-text display-1 lead">
        Experience Your Luxury!
      </h1>

      <button id="login_btn" onclick="login()" style="" class="btn btn-light btn-lg">login</button>


    </div>
    <div id="login">
          <form action="login.php" method="post">
            <div style="margin-bottom: 40px;">
              <a onclick="back_to_text()" style="position: absolute;">
              <img id="backbtn" style="" src="../imgs/arrow-left-solid.png" alt="" srcset="">
              </a>
              <div class="">
                <h3 class="text-center lead display-6">Login</h3>
              </div>
            </div>

            

            <div class="mb-3">
              <label style="padding-left: 10px;" for="uname" class="form-label">Username</label>
              <input type="text" name="uname" id="" class="form-control logintext" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label style="padding-left: 10px;" for="pword" class="form-label">Password</label>
              <input type="password" name="pword" id="" class="form-control logintext" placeholder="" aria-describedby="helpId">
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit"style=" " class="btn btn-dark submit">Submit</button>
            </div>
            <div style="display: flex;  margin-top: 20px;  display: flex;align-items: center;align-content: center;justify-content:center;">
              <a><img style="margin-top: 20px; margin-right: 20px; width:40px; height:auto; filter: invert(100%);"  src="../imgs/facebook-brands.svg" alt="" srcset=""></a>
              <a><img style="margin-top: 20px; margin-left: 20px; width:40px; height:auto; filter: invert(100%);"  src="../imgs/google-brands.svg" alt="" srcset=""></a>
            </div>
            <div style="text-align:center; padding-top:20px; ">
            <a style="text-decoration: none; color:ghostwhite; font-weight:450;" href="">I forget my password</a>
            <p style="margin-bottom: 0;color:ghostwhite; ">OR</p>
            <a onclick="signup()" style="text-decoration: none; color:ghostwhite; font-weight:450;" href="#">I'm a new one</a>
            </div>
            
          </form>
    </div>


    <div id="signup">
          <form action="signup.php" method="post">
          <div style="margin-bottom: 40px;"> 
              <a onclick="back_to_login()" style="position: absolute;">
              <img id="backbtn" style="" src="../imgs/arrow-left-solid.png" alt="" srcset="">
              </a>
              <div class="">
              <h3 class="text-center lead display-6">Signup</h3>
              </div>
            </div>
            

            <div class="mb-3">
              <label style="padding-left: 10px;" for="email" class="form-label">Email</label>
              <input type="email" name="email" id="" class="form-control logintext" placeholder="" aria-describedby="helpId" required>
            </div>
            <div class="mb-3">
              <label style="padding-left: 10px;" for="uname" class="form-label">Userame</label>
              <input type="text" name="uname" id="" class="form-control logintext" placeholder="" aria-describedby="helpId" required>
            </div>
            
            <div class="mb-3">
              <label style="padding-left: 10px;" for="p-no" class="form-label">Phone Number</label>
              <input type="text" name="p_no" id="" class="form-control logintext" placeholder="" aria-describedby="helpId" required>
            </div>
            <div class="mb-3">
              <label style="padding-left: 10px;" for="pword" class="form-label">Password</label>
              <input type="password" name="pword" id="" class="form-control logintext" placeholder="" aria-describedby="helpId" required>
            </div>
            <div class="d-flex justify-content-center">
            <button onclick="back()" type="submit"style=" " class="btn btn-dark submit">Submit</button>
            </div>
            
           
          </form>
    </div>
    

</div>


<div id="about" class="container" style="">
  <h1 style="font-size:100pt" class="display-1 text-center lead">
    Hotel Rashni
  </h1>
  <p id="abouttxt" class="text-center lead">
  This is a standard text. Lorem  ipsum dolor sit amet consectetur adipisicing elit. Laudantium, ea veritatis. Quia placeat dolorem, est repudiandae mollitia doloribus ab facere perspiciatis quaerat commodi, debitis rerum laborum minima repellat sapiente deleniti eveniet ipsum dolorum voluptates inventore esse dicta alias ut? Natus magnam voluptatibus accusantium delectus atque quas assumenda quisquam optio maxime, modi exercitationem laborum, temporibus velit ex, debitis libero laboriosam beatae?  
  </p>
  <br>
    <div class="container" style="    display: flex;justify-content:center;">
     
    <div class="card-group">
        <div style="display: flex; align-items: center; text-align: center; margin: 20px;color: gray; background-color: transparent; border: none;" 
        class="card">
          <img class="card-img-top" style="width: 80px; height: auto; filter: invert(50%); padding-bottom: 20px;" src="../imgs/utensils-solid.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Food</h4>
            <p class=" card-text">This is a standard text. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, praesentium rerum doloremque beatae perferendis fugit.</p>
          </div>
        </div>
        <div style="display: flex; align-items: center; text-align: center; margin: 20px;color: gray; background-color: transparent; border: none;" class="card">
          <img class="card-img-top" style="width: 80px; height: auto; filter: invert(50%); padding-bottom: 20px;" src="bed-solid.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Rooms</h4>
            <p class="card-text">This is a standard text. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, illum ipsa voluptates at maxime et consequuntur perspiciatis possimus voluptas quod nemo, numquam, non expedita. Quisquam.</p>
          </div>
        </div>
        <div style="display: flex; align-items: center; text-align: center; margin: 20px;color: gray; background-color: transparent; border: none;" class="card">
          <img class="card-img-top" style="width: 80px; height: auto; filter: invert(50%); padding-bottom: 20px;" src="../imgs/square-parking-solid.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Parking</h4>
            <p class="card-text">This is a standard text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit labore perspiciatis unde ab enim incidunt!</p>
          </div>
        </div>
      </div>
    </div>
</div>
<span>

<div style="" class="gallery d-flex" id="gallery">
  <div class="d-flex " style="flex-wrap: wrap;">
  <h1 class="display-1 text-center lead" style="width: 100vw; color: ghostwhite; margin-bottom: 40px; margin-top: 50px;">
    | Gallery |
  </h1>
  <p id="" class="gallerytxt lead container " style="">
  This is a standard text. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quo reprehenderit rerum culpa voluptatum necessitatibus ullam? Ratione, similique debitis! Sit dolore deleniti dolorem quod accusamus nostrum itaque culpa rerum ut aspernatur possimus, pariatur dolores nam quos mollitia, eius odit! Iste ullam inventore facilis at laborum illum, nesciunt voluptatem ipsa iusto! Debitis itaque deserunt nesciunt nesciuntnesciunt.
</p>
  <div class="container col-12 justify-content-center" style="display: flex; flex-wrap: wrap;">
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">

    </div>
    <div class="card col-4" style="">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
    <div class="card col-4">
      <img class="card-img-top" src="../imgs/img2.jpg" alt="Card image cap">
    </div>
  </div>
  </div>


  
</div>

<div id="contact">


<div id="contact" class=" contact" style=" ">
<div id="contact_patch" style=""> </div>
<h1 class="display-1 text-center lead" style="color: ghostwhite; padding-bottom: 40px; padding-top: 50px;">
    Contact
  </h1>
      <div id="contact_card_group" style="" class="card-group justify-content-center">
        <div style="" class="contact_card">

        <img class="card-img-top" src="../imgs/phone.png" style="width: 80px; height: auto; margin-bottom:20px; filter:invert(100%);" alt="Card image cap">
        <p class="lead" style="color:whitesmoke;">(+94) 71 2 345 678</p>
      </div>
        <div style="" class="contact_card">

        <img class="card-img-top" src="../imgs/location.png" style="width: 80px; height: auto; margin-bottom:20px; filter:invert(100%);" alt="Card image cap">
        <p class="lead" style="color:whitesmoke;">This is a standard text. Lorem, ipsum, dolor, sit, amet</p>
      </div>
        <div style="" class="contact_card">

        <img class="card-img-top" src="../imgs/email (2).png" style="width: 80px; height: auto; margin-bottom:20px; filter:invert(100%);" alt="Card image cap">
        <p class="lead" style="color:whitesmoke;">info@abc.com</p>
      </div>
      </div>
    </div>

</div>
</span>
        <script>
          function login(){
            document.getElementById("leadtxt").style.display="none";
            document.getElementById("login").style.display="block";
          }
          function signup(){
            document.getElementById("leadtxt").style.display="none";
            document.getElementById("login").style.display="none";
            document.getElementById("signup").style.display="block";
          }
          function back_to_login(){
            document.getElementById("login").style.display="block";
            document.getElementById("signup").style.display="none";
          }
          function back_to_text(){
            document.getElementById("login").style.display="none";
            document.getElementById("leadtxt").style.display="flex";
          }
        </script>

  <?php
  unset($_SESSION['login_status']);
  ?>
</body>
</html>