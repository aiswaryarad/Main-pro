<?php 
session_start();
include_once "config/dbconnect.php";
$email=$_SESSION['email'];
$products=$_GET['products'];
if(isset($_POST['add_to_cart'])){
    $user=$_POST['user'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity=$_POST['quantity'];
    $select_cart =  "SELECT * FROM cart WHERE product_id = '$products' AND user_id = '$user' AND is_checked_out=0";
    $result=$conn->query($select_cart);
    if($result->num_rows>0){
        echo '<script>alert("product alredy added to cart!")</script>';
     }
     else{
       $sql= mysqli_query($conn, "INSERT INTO cart (user_id,product_id,quantity) VALUES ('$user', '$products','$product_quantity')");
       echo'<script>alert("product added to cart!")</script>';
     }
  
  }
  if(isset($_POST['add_to_wishlist'])){
    $user=$_POST['user'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $select_wishlist =  "SELECT * FROM wishlist WHERE product_id = '$products' AND user_id = '$user' AND status=0";
    $result=$conn->query($select_wishlist);
    if($result->num_rows>0){
        echo '<script>alert("product alredy added to wishlist!")</script>';
     }
     else{
       $sql= mysqli_query($conn, "INSERT INTO wishlist (user_id,product_id) VALUES ('$user', '$products')");
       echo'<script>alert("product added to wishlist!")</script>';
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
        <link rel="stylesheet"href="css/wishlistbutton.css">
        <link rel="stylesheet"href="cartstyle.css">
        <link rel="stylesheet"href="css/search.css">
        <!----->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!----->
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>
    <?php
   if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
 }
?>
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

           <!-- <div class="wrapper">
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
    <div class="bottom_nav">
      <ul>
      <div class="bottom_nav">
                            
      </ul>
  </div>

</div> -->

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
    </div> -->
    <!-- <div class="bottom_nav">
      <ul>
      <div class="bottom_nav">
                            <div class="dropdown">
                            <h6 >All Categories></h6>
                            <div class="dropdown-content">

            -->
           <div>
                            </div>
            


                                <?php
                                include_once "config/dbconnect.php";
                                $sql="SELECT * from product where product_id='$products'";
                                $result = $conn-> query($sql);

                                if ($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){ 
                           ?> 
                                   
            <section class="product-detail section-padding">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="product-thumb">
                            <img src= "./seller/uploads/<?php echo $row['product_image']?>"class="img-fluid product-image" alt="" > 
                        </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="product-info d-flex">
                                <div>
                                    <h2 class="product-title mb-0"><?php echo $row['product_name']?></h2>

                                    <p class="product-p"></p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">₹ <?php echo $row['price']?></small>
                            </div>

                            <div class="product-description">

                                <strong class="d-block mt-4 mb-2">Description</strong>

                                <p class="lead mb-5"><?php echo $row['product_desc']?></p>
                            
                            <div>
                               
                            </select>
                                  
                            <div>
                            </div>  
                            <br><br>
 
                            <div class="product-cart-thumb row">
                                <div class="col-lg-6 col-12">
                                <form method="post" class="box" action="">
                                <label for="Quantity">
                                 Quantity
                                </label>
                                <input type="number"name="quantity" min="1" name="product_quantity" max="<?php echo $row['Total_quantity']?>" value="1">
                                </div>
                                <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                                <?php $query=mysqli_query($conn,"select * from users where email='$email'");
                                while($row=mysqli_fetch_array($query))
                                {?>
                                <input type="hidden" name="user" value="<?php echo $row['user_id'];?>">
                                <?php } ?>
                             <div class="col-lg-6 col-12 mt-4 mt-lg-0"> 
                             <button type="submit" value="add to wishlist" name="add_to_wishlist" class="buttons"><i class="bi bi-heart"></i> </button>                               
                             <button type="submit" value="add to cart" name="add_to_cart" class="btn custom-btn cart-btn" data-bs-toggle="modal" data-bs-target="">Add to Cart</button>
                              
                            </form>
                                   </div>

                                <p>
                                    <a href="#" class="product-additional-link"></a>

                                    <a href="#" class="product-additional-link">Delivery and Payment</a>
                                </p>
                            </div>

                        </div>

                    </div>
                  
                </div>
            </section>
           
            <?php
                                }
                            }
                        
                        ?>  




<!---->
<div class="container">
    	<h1 class="mt-5 mb-5">Review & Rating System in PHP & Mysql using Ajax</h1>
    	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
                        <a href="product-detail.php?products=<?php echo $row['product_id'];?>" name="add_review" id="add_review" class="btn btn-primary">Review</a>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
                <?php
                $query=mysqli_query($conn,"select * from users where email='$email'");
                while($row=mysqli_fetch_array($query))
                {
                    $user_name=$row['username'];
                
                ?>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" value="<?php echo($user_name); ?>" class="form-control" placeholder="Enter Your Name" />
	        	</div>
                <?php
                }
                ?>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
<!---->
            <section class="related-product section-padding border-top">
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">You Might Also Like</h2>
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
                               <img src= "./seller/uploads/<?php echo $row['product_image'];?>"class="img-fluid product-image" alt="" >;
                               
                        </a>
                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="#" class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>
                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                </div>
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a>
                            </div>
                                </form>
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

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a href="#" class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                </div>
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a> 
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
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                        <a href="#" class="product-title-link"><?php echo $row['product_name'];?></a>
                                        </h5>

                                        
                                    </div>

                                    <small class="product-price text-muted ms-auto">₹ <?php echo $row['price'];?></small>
                                </div>
                                <a href="product-detail.php?products=<?php echo $row['product_id'];?>" class="button <?php echo ($row['Total_quantity']==0)?'':'disabled'; ?>">view</a> 
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

        <!-- CART MODAL -->
        <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                            </div>

                            <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">Tree pot</h3>

                                <p class="product-price text-muted mt-3">$25</p>

                                <p class="product-p">Quatity: <span class="ms-1">4</span></p>

                                <p class="product-p">Colour: <span class="ms-1">Black</span></p>

                                <p class="product-p pb-3">Size: <span class="ms-1">S/S</span></p>

                                <div class="border-top mt-4 pt-3">
                                    <p class="product-p"><strong>Total: <span class="ms-1">$100</span></strong></p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="row w-50">
                            <button type="button" class="btn custom-btn cart-btn ms-lg-4">Checkout</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
    </html>