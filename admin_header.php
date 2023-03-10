<nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="admin_index.php">
            <h1>Resturant <span style="font-size: 20px; font-style: italic; color:white;">Food & Drink</span></h1>
            
          </a>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php 
              $cat = $con->query("SELECT * FROM cat");
              while ($row = $cat->fetch_array(MYSQLI_ASSOC)) {
            ?>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3"  href="meal.php?id=<?php echo $row['id']?>"><?php echo $row['cat_name']?></a>
              </li>
              <?php }?>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3"  href="contact-us.php">Contact Us</a>
              </li>
              <?php if(is_array(auth())): ?>


                <?php if(auth()['type'] == 'admin'): ?>
                <li class="nav-item">
                  <a class="nav-link p-2 p-lg-3"  href="add_meal.php">
                  <i id="iconn" class="fa-solid fa-gears"> </i>
                  Admin Panel
                  </a>
                </li>
                <?php endif;?>
                
             

                <li class="nav-item">
                  <a class="nav-link p-2 p-lg-3"  href="logout.php">
                  <i id="iconn" class="fa-solid fa-sign-out"> </i>
                  Logout
                  </a>
                </li>

                <?php endif;?>

                <?php if(is_null(auth())): ?>
                  <li class="nav-item">
                  <a class="nav-link p-2 p-lg-3"  href="index.php">
                  <i id="iconn" class="fa-solid fa-sign-in"> </i>
                  Login
                  </a>
                </li>
                <?php endif;?>



            </ul>
          
            
        </div>
      </nav>