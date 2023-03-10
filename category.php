<?php
    require('connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
<div class="continar">
            <?php
             include("admin_header.php") 
            ?>
            <div class="main">
            <form action="category.php" method="get">
                <select name="cat" id="label" style="text-align: center;" onchange="this.form.submit();">
                    <option value="">Select Category</option>
                    <option value="">All</option>
                <option value="ad">Add Product</option>
                <?php
                    $r = $con->query("SELECT * FROM cat");
                    if ($r) {
                        while ($w = $r->fetch_array(MYSQLI_ASSOC)) {
                            echo '
                            <option value="'.$w['cat_name'].'"></option>
                            ';
                        }
                    } ?>
                </select>
            </form>
            
         
        </div>
        </div>

    
</body>
</html>