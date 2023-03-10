<?php 
    require("model.php");
    $con=new mysqli ("localhost","root","","final_project");
    $meal = new meal();
    $meal->set_mealname($_POST["meal_name"]);
    $meal->set_image(isset($_FILES["image"]) ? $_FILES["image"] : null);
    $meal->set_price($_POST["price"]);
    $meal->set_det($_POST["det"]);

    $meal->set_cat($_POST["cat"]);

    $con->query("INSERT INTO meal (cat_id, meal_name, img, price, det)
         VALUES ('".$meal->get_cat()."','".$meal->get_mealname()."','".$meal->get_image()."','".$meal->get_price()."','".$meal->get_det()."' )");
    header('Location: add_meal.php');
 ?>

