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
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200&family=Cairo:wght@500&family=Lato:ital@0;1&family=Mukta:wght@400;600&family=Noto+Kufi+Arabic:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resturant</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"
    style="min-height: 100vh">
    <?php 
                        if (
                            isset($_GET['user'])== true && $_GET['user']!=""&&
                            isset($_GET['email'])== true && $_GET['email']!=""&&
                            isset($_GET['password'])== true && $_GET['password']!=""
                             ){
                            $user = $_GET['user'];
                            $email = $_GET['email'];
                            $pass = sha1($_GET['password']);
                         
                            $r = $con->query("INSERT INTO `users`(`username`, `type`, `password`) VALUE ('$email' , 'user' ,  '$pass')");
                            if($r == true){
                                header("Location:index.php");
                            }
                            }?>
    <form class="border shadow p-3 rounded"action="" method="get" 
    
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">Sign up</h1>
		  <div class="mb-3">
		    <label for="username" class="form-label">Username</label>
		    <input type="text" class="form-control"  name="user"  id="username">
		  </div>


          <div class="mb-3">
		    <label for="email" class="form-label">Email</label>
		    <input type="text" class="form-control" name="email" id="username">
		  </div>


		  <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" name="password" class="form-control" id="password">
		  </div>
		 
		  <button type="submit" name="sub_btn" 
		          class="btn btn-primary">Sign Up</button>
		</form>
      </div>
 </div>
</body>
</html>