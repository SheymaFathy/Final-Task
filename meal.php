<?php 
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200&family=Cairo:wght@500&family=Lato:ital@0;1&family=Mukta:wght@400;600&family=Noto+Kufi+Arabic:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/js.js"></script>
<title>resturant</title>
</head>
<body>
    <?php
    include("admin_header.php");
    ?>
          
       <!-- Menu Start -->
       <div class="container-xxl bg-white p-0"> 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food List</h5>
                    <h1 class="mb-5">Most Popular Meal</h1>
                </div>

                <div class="row ">
                    
                <?php
                if(isset($_GET['id'])) {
                    $cat = $_GET['id'];
                     $meal=$con->query("SELECT * FROM meal WHERE cat_id = $cat limit 8" );
                    } 
                    while ($row = $meal->fetch_array(MYSQLI_ASSOC)){
                ?>
                <div class="col-3 ">
                    <div class="card text-center">
                    <img  src="<?php echo $row['img'] ?>" class="img-thumbnail" alt="">
                    <div class="card-body">
                        <h5  class="card-title"><?php echo $row['meal_name'] ?></h5>
                        <p class="card-text">$ <?php echo $row['price'] ?></p>
                        <button onclick="addToCart()" type="button" class="btn btn-outline-warning"><a href="details.php?det=<?php echo $row['id']?>">Veiw Details</a></button>
                    </div>
                    </div>
                </div>
                <?php }?>
                </div>


          <!-- Footer Start -->
          <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6"> 
                    <div class="info mb-5">
                <h1 style="color:orange; font-size:25px">About Us</h1>
                <p class="mb-5">
               About Our Resturant About Our Resturant About Our Resturant About Our Resturant About Our Resturant 
                </p>
                <div class="copyright">
                  Created By <span>Shaimaa Faty Zaki </span>
                  <div>&copy; 2023 - <span>R.M.S</span></div>
                </div>
              </div>
            </div>
                    <div class="col-lg-3 col-md-6">
                    <h1 style="color:orange; font-size:25px">contact Us</h1>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>90 Street, New Cairo, EGYPT</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:01207720010">01207720010</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:email@email.com">rms.resturant@email.com</a></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com/shaimaa21_fathy"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/sheemo1983/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/feed/" ><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <h1 style="color:orange; font-size:25px">Opening Time</h1>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09 AM - 12 AM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10 AM - 12 AM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h1 style="color:orange; font-size:25px">Newsletter</h1>
                        <p>Write your Email to enjoy with our food</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
       </div>
    
     
    
</body>
</html>