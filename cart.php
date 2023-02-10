<?php 
session_start();
include "config/dbconnect.php";
$email=$_SESSION["email"];
if(!isset($_SESSION["email"]))  
{
    header("Location:login.php");
}
else
{
    $query=mysqli_query($conn,"select * from users where email='$email'");
    while($row=mysqli_fetch_array($query))
    {
        $user_id=$row['user_id'];
    }
   

{
    if(isset($_POST['update_cart'])){
        $update_quantity = $_POST['cart_quantity'];
        $update_id = $_POST['cart_id'];
        $sql= mysqli_query($conn, "UPDATE cart SET quantity = '$update_quantity' WHERE cart_id = '$update_id'");
        echo $sql;
        $message[] = 'cart quantity updated successfully!';
     }
     if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM cart WHERE cart_id = '$remove_id'") or die('query failed');
        header('location:cart.php');
     }  
     if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'") or die('query failed');
        header('location:cart.php');
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
        <link rel="stylesheet"href="css/cartstyle.css">
        <link rel="stylesheet"href="css/search.css">
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
<!---->
<div class="wrapper">
   <div></div>
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
    </div>
    <!-- <div class="bottom_nav">
      <ul>
      <div class="bottom_nav">
                            
      </ul>
  </div>

</div> -->
<header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Cart</span>
                                
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
<!---->
<?php
   if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
 }
?>
<div class="container">
<div class="shopping-cart">

   <h1 class="heading"></h1>
</br>
</br>
   <table style=>
      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>Stock</th>
         <th>action</th>
      </thead>
      <tbody>
      <?php
      $query=mysqli_query($conn,"select * from users where email='$email'");
      while($row=mysqli_fetch_array($query))
      {
         $user_id=$row['user_id'];
         $cart_query = mysqli_query($conn, "SELECT * FROM cart,product WHERE user_id = '$user_id' and cart.product_id=product.product_id and cart.is_checked_out=0") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
              
      ?>
         <tr>
            <td><img src="./seller/uploads/<?php echo $fetch_cart['product_image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['product_name']; ?></td>
            <td>₹<?php echo $fetch_cart['price']; ?>/-</td>
            <td>
               <form action="" method="POST">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['cart_id']; ?>">
                  <input type="number" min="1"  max="<?php echo $fetch_cart['Total_quantity']?>" name="cart_quantity" value="<?php echo $fetch_cart['quantity'];?>">
                  <input type="submit" name="update_cart" value="update" class="option-btn">
               </form>
            </td>
            <td>₹<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><?php 
                            if($fetch_cart['Total_quantity']==0)
                            {
                                echo('<span style="color:#FF0000;text-align:center;">out of stock!</span>');
                            }
                            else
                            {
                                echo('<span style="color:#FF0000;text-align:center;">In stock</span>');
                            }
                            ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['cart_id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            
            }
        
            
         }
        else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
        }
      ?>
      <tr class="table-bottom">
         <td colspan="4">grand total :</td>
         <td>₹<?php echo $grand_total; ?>/-</td>
         <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>
   </tbody>
   </table>

   <div class="cart-btn">  
     <a href="shop.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Continue shopping</a>
      <a href="checkout.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</div>

</div>
    </div>
<!----->
           
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