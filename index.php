<?php 

 require_once("connect.php");

 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $hashedPass =sha1($password);

    // check
    $stmt = $con->prepare("SELECT id, username, password FROM users WHERE username = ? AND password = ?");
    $stmt->execute(array($user, $hashedPass));
    $user = $stmt->get_result()->fetch_array();
 
    if(! is_null($user)){
      $_SESSION['auth_id'] = $user['id'];

      if(is_admin()) {
        header('Location: admin_index.php');
        exit();
      }

      header('Location: user_index.php');
      exit;
    } else {
      set_flash('login', 'البيانات غلط');
    }  
}


// if the user is already authenticated in redirect to his dashboard.
if(is_array(auth())) {
  if(is_admin()) {
    header('Location: admin_index.php');
    exit();
  }

  // is user
  header('Location: user_index.php');
  exit;
}  
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
    <form class="border shadow p-3 rounded"action="<?php echo $_SERVER['PHP_SELF']?>" method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">Email</label>
		    <input type="text" 
		           class="form-control" 
		           name="user" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>

      <?php echo get_flash('login'); ?>
		<a href="signup.php">Do Not have an account? sign up now</a><br><br>
		 
		  <button type="submit" name="sub_btn" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
 </div>
</body>
</html>
