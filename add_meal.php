<?php 
require_once("connect.php")
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
<script src="js/js.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200&family=Cairo:wght@500&family=Lato:ital@0;1&family=Mukta:wght@400;600&family=Noto+Kufi+Arabic:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resturant</title>
</head>
<body>
<?php 
include("admin_header.php");

?>

      <div class="form-container">
        <form action="control.php" method="post" enctype="multipart/form-data">
          <select name="cat" id="label" style="text-align: center;" >
          <option  value="0">All Categories</option>
            <?php 
					$catg=$con->query("SELECT * FROM cat");
                    while ($row = $catg->fetch_array(MYSQLI_ASSOC)) {
                    ?>
					<option  value="<?php echo $row['id']?>"><?php echo $row['cat_name']?></option>
					<?php }?>
            
          </select>
        <table>
        <tr>
            <td>
            <label for="">Add Meal</label>
            </td>
            <td id="td"><input id="mealname" type="text" name="meal_name" placeholder="Add Meal"></td>
        </tr>

        <tr>
            <td>
            <label for="">Add Image</label>
            </td>
            <td id="td"> <input type="file" id="image" name="image" placeholder="Add Image"></td>
        </tr>

        <tr>
            <td>
            <label for="">Add Price</label>
            </td>
            <td id="td"><input type="text" id="price" name="price" placeholder="Add price"></td>
        </tr>

        <tr>
            <td>
            <label for="">Add Details</label>
            </td>
            <td id="td"> <input type="text" id="det" name="det" placeholder="Add Details"></td>
        </tr>
  
        </table>
        <div style="width:100px; height:50px" id="r" ></div>
        <input onclick="fun1()" class="sub" type="submit" value="Send Data">
        </form>
            
      </div>


</body>
</html>