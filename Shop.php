
<?php 
session_start();
include_once "config/dbconnect.php";
$email=$_SESSION["email"];

if(isset($_POST['add_to_wishlist'])){ 

    $product_id = $_POST['product_id'];
    $product_quantity=$_POST['quantity'];
    $query=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query))
    {
     $user_id=$row['user_id'];

    $select_wishlist=  "SELECT * FROM  wishlist WHERE product_id = '$product_id' AND user_id = '$user_id' AND status=0";
    $result=$conn->query($select_wishlist);
    if($result->num_rows>0){
        echo '<script>alert("product alredy added to wishlist!")</script>';
     }
     else{
       $sql= mysqli_query($conn,"INSERT INTO wishlist (user_id,product_id) VALUES ('$user_id', '$product_id')");
       echo $sql;
       echo'<script>alert("product added to wishlist!")</script>';
     }
  }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion - Products</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link href="css/stylecat.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navstyle.css">
        <link rel="stylesheet"href="css/buttonstyle.css">
        <link rel="stylesheet"href="css/search.css"> 
        <link rel="stylesheet"href="css/wishlistbutton.css">

<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            
        <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <strong><span>bio</span>Me</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="login.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="customer_index.php"><i class="bi bi-house"></i> Home</a>
                            </li>

                            <li class="nav-item">
                            <div class="dropdown">
                            
                                <a class="nav-link" href="shop.php"><i class="bi bi-shop-window"></i> Shop</a>
                                <div class="dropdown-content">
                                <a href="shop.php">products</a>
                                <a href="cart.php">cart</a>
                                <a href="wishlist.php">wishlist</a>
                            </div>
                            </div>
                            </li>
                                                    
                      </ul>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                           

                            <input type="text" placeholder="Search.." name="search2">
                            <button type="submit"><i class="bi bi-search"></i></button>
                           
                            </form> 
                            </li>
</div>  
                      <div class="dropdown">
                        <div class="d-none d-lg-block">
                        <?php if( isset($_SESSION['email'])&& !empty($_SESSION['email']) )
                        { ?>
                        <a href=" " style="font-size:11px" class="bi-person custom-icon me-3"> Hello-<?php echo htmlentities($_SESSION['username']);?></a>
                                <div class="dropdown-content">
                                <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                            { ?>
                            <li class="nav-item">
                                    <a class="nav-link" href="logout.php"> <i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            <?php }
                            else{ ?>
                                
                                <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-left"></i>Login</a>
                            </li>
                         <?php } ?>
                                <a href="#">profile</a>
                                <a href="#">order_history</a>
                    </div>
                        <?php }

                        else{ ?>
                          
                            <a href=" " style="font-size:15px" class="bi-person custom-icon me-3">Login</a> 
                            <div class="dropdown-content">
                            <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                            { ?>
                            <li class="nav-item">
                                    <a class="nav-link" href="logout.php"> <i class="bi bi-box-arrow-right"></i> Logout</a>
                                </li>
                            <?php }
                            else{ ?>
                                
                                <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-left"></i>Login</a>
                            </li>
                         <?php } ?>
                                <a href="#">profile</a>
                                <a href="#">order_History</a> 
                        </div> 
                         <?php } ?>
                            <a href="cart.php" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
           <!-- <div class="wrapper">
   <div class="multi_color_border"></div>
    <div class="top_nav">
        <div class="left">
          <div class="search_bar">
          </div>
      </div> 
      <div class="right">
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
    </div>-->
    <!-- <div class="bottom_nav">
      <ul>
      
  </div>

</div>
                              <div class="dropdown">
                            <h7 class="">All-Categories></h7>
                            <div class="dropdown-content">
                            <?php
                            include_once "config/dbconnect.php";
                            $sql="SELECT * from category where status=0";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                ?>
                            
                            <a href="category.php?category=<?php echo $row['category_id'];?>"> <?php echo  $row['category_name']; ?></a>
                            
                            <?php
                                }
                            }
                        
                        ?> 
                        </div>
        </ul>                     
  
</div>
</div>        -->
         


<div class="bottom_nav">
<div class="bottom_nav">
<header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                      
                        <div class="bottom_nav">  <div class="bottom_nav">
                            <div class="dropdown">
                            <h6>
                            <span class="d-block text-primary"><h6>All Categories></h6></span>
                            <div class="dropdown-content">
                            <?php
                            include_once "config/dbconnect.php";
                            $sql="SELECT * from category where status=0";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                ?>
                            
                            <a href="category.php?category=<?php echo $row['category_id'];?>"> <?php echo  $row['category_name']; ?></a>
                            
                            <?php
                                }
                            }
                        
                        ?> 
                            </h6>
                        </div>
                    </div>
                </div>
            </header>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Shop</span>
                                
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">New Arrivals</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="#"> 
                                <?php
                                $sql="SELECT * from product where product_id=1";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= "./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >
                               
                        </a>
                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival</span>

                                    <!-- <a href="#"><i class="bi bi-heart"></i></a> -->
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>
                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                </div>
                                <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form> 
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php
                                }
                            }
                        
                        ?> 
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="#"> 
                                <?php
                                $sql="SELECT * from product where product_id=9";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= " ./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >
                              
                             
                        </a>
                                <div class="product-top d-flex">
                                    <span class="product-alert"></span>

                                    <!-- <a href="#" class="bi bi-heart"></a> -->
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                    </div>
                                    <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form>
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php
                                }
                            }
                        
                        ?>  
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="#"> 
                                <?php
                                $sql="SELECT * from product where product_id=11";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= " ./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >
                            
                                 
                        </a>

                                <div class="product-top d-flex">
                                    <!-- <a href="#" class="bi bi-heart"></a> -->
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                        
                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                    </div>
                                <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form>
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php
                    }
                }
            
            ?> 
                        <div class="col-12">
                            <h2 class="mb-5">Popular</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="#"> 
                                <?php
                                $sql="SELECT * from product where product_id=1";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= " ./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >
                              
                                
                        </a>
                                <div class="product-top d-flex">
                                    <span class="product-alert">Trending</span>

                                    <!-- <a href="#" class="bi bi-heart"></a> -->
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a  class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                </div>
                                <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="1">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form>
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php    
                    }
                }
            
            ?> 
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="#"> 
                                <?php
                                $sql="SELECT * from product where product_id=12";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= " ./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >
                              
                                 
                        </a>
                                <div class="product-top d-flex">
                                    <!-- <a href="#" class="bi bi-heart"></a> -->
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                    </div>
                                    <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form>
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php    
                    }
                }
            
            ?> 
                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.html"> 
                                <?php
                                $sql="SELECT * from product where product_id=11";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                                    ?>                  
                               <img src= "./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >        
                        </a>
                        
                                <div class="product-top d-flex">
                                    <a href="#" class="bi bi-heart"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>
                                    </div>
                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                    </div>
                                    <form method="post" class="box" action="">
                                <input type="hidden"name="quantity" min="1" name="product_quantity" max="<?php echo $fetch_cart['Total_quantity']?>" value="1">
                                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                                
                                <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                              
                                </form>
                            </div>
                            <?php 
                            if($row['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            ?>
                        </div>
                        <?php   
                    }
                }
            
            ?> 
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">Little</a> Fashion</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
   

    </body>
</html>
