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
    <script src="js/js.js"></script>
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
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Order Now</h5>
                <h1 class="mb-5">Send your favorate meal</h1>
            </div>
        
                <div class="col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <?php 
                        if (
                            isset($_GET['name'])== true && $_GET['name']!=""&&
                            isset($_GET['email'])== true && $_GET['email']!=""&&
                            isset($_GET['quantity'])== true && $_GET['quantity']!=""&&
                             isset($_GET['city'])== true && $_GET['city']!=""&&
                            isset($_GET['country'])== true && $_GET['country']!=""&&
                            isset($_GET['tel'])== true && $_GET['tel']!="" 
                             ){
                            $n1 = $_GET['name'];
                            $n2 = $_GET['email'];
                            $n3 = $_GET['quantity'];
                            $n4 = $_GET['city'];
                            $n5 = $_GET['country'];
                            $n6 = $_GET['tel'];
                        
                        
                            $r = $con->query("INSERT INTO my_order VALUE (null ,'$n1' , '$n2' , '$n3' , '$n4', '$n5', '$n6' )");
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
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"name="quantity" placeholder="Quantity"required="required">
                                        <label for="subject">Quantity</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                    <input class="form-control" type="text" name="address" placeholder="Address" required="required">  
                                    <label for="subject">Address</label>                                     
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                    <input class="form-control" type="text" name="city" placeholder="City" required="required">
                                    <label for="subject">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                    <input class="form-control" type="text" name="country" placeholder="Country" required="required">                                   
                                <label for="subject">Country</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                    <input class="form-control" type="text" name="tel" placeholder="Phone No." required="required">                                   
                                <label for="subject">Phone No.</label>
                                    </div>
                                </div>
                                
                                <div class="col-3">
                                    <button id="msg-btn" onclick="myfun()" class="btn btn-primary w-100 py-3" type="submit">Send Order</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>