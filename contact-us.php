<?php require_once("connect.php")?>
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
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200&family=Cairo:wght@500&family=Lato:ital@0;1&family=Mukta:wght@400;600&family=Noto+Kufi+Arabic:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resturant</title>
</head>
<body>
<?php 
include("admin_header.php");
?> 

<div class="container-xxl bg-white p-0"> 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d55256.51442493679!2d31.26706997303959!3d30.05027726116518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!3e6!4m4!1s0x145840c381a29537%3A0xf1d5b3a64a0e4de1!3m2!1d30.050281899999998!2d31.2320504!4m5!1s0x145840c381a29537%3A0xf1d5b3a64a0e4de1!2z2YfZitmE2KrZiNmGINix2YXYs9mK2LPYjCAxMTE1INmD2YjYsdmG2YrYtCDYp9mE2YbZitmE2Iwg2LTYsdmD2LPYjCDYqNmI2YTYp9mC2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCsIDQzMTAwMDI!3m2!1d30.050281899999998!2d31.2320504!5e0!3m2!1sar!2seg!4v1677721168963!5m2!1sar!2seg"
                         width="600" height="380" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>

                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <?php 
                            if (
                                isset($_GET['name'])== true && $_GET['name']!=""&&
                                isset($_GET['email'])== true && $_GET['email']!=""&&
                                isset($_GET['sub'])== true && $_GET['sub']!=""&&
                                isset($_GET['msg'])== true && $_GET['msg']!="" ){
                                $n1 = $_GET['name'];
                                $n2 = $_GET['email'];
                                $n3 = $_GET['sub'];
                                $n4 = $_GET['msg'];
                            
                            
                                $r = $con->query("INSERT INTO contact VALUE (null ,'$n1' , '$n2' , '$n3' , '$n4' )");
                                }?>
                                <form action="" method="get">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control"name="name" id="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="sub" id="subject" placeholder="Subject" required>
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="msg" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <button id="msg-btn" onclick="myfun()" class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
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