<?php 
session_start();
?>
<!doctype html>
<html lang="en">
    <head>

    <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"254989e984ae79b643fd96fb802028836","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Packaging produts store</title>

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
                            <li>
                            <a class="nav-link" href="seller.php"><i class=""></i>Become a seller</a>   
                            </li>                   
                      </ul>
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
                                <a href="./customer/profileinformation.php">profile</a>
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
                                <a href="./customer/profileinformation.php">profile</a>
                                <a href="#">order_History</a> 
                        </div> 
                         <?php } ?>
                            <a href="cart.php" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            </nav>

            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="images/slideshow/e1.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Be the pollution solution</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Got it right with us.</p>

                                    <a href="#" class="btn custom-btn">Learn more about us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/e2.jpeg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Our time is now</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Be the change</p>

                                    <a href="shop.php" class="btn custom-btn">Explore products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/e4.webp" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Did you Know?</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">We Provide 100% biodigradable and recycleable products.</p>

                                    <a href="#" class="btn custom-btn">Work with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-5">Get started with <span>bio</span>Me</h2>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="images/im4.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Importance <span>of</span> <br>Echo- Friendly <span>Products</span></h4>

                                                <p>It can significantly reduce waste generation and promote the reuse and recycling of waste products. This will prevent the earth from becoming a large dump yard in the coming years. In short, using eco-friendly products will preserve the planet and all its inhabitants from the ill effects of human activities.</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="#" class="custom-link mb-2">
                                                        Learn more about us
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                
                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="shop.php" class="custom-link mb-2">
                                                        Explore products
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="front-product">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12">
                            <img src="images/im5.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="px-5 py-5 py-lg-0">
                                
                                <h2 class="mb-4"><span>Convenience </span> made easy!</h2>

                                <p class="lead mb-4">You can purchase your favorite eco-produts at the cmfort of your home through our website.</p>

                                <a href="products.html" class="custom-link">
                                    Explore Products
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">Featured Products</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="shop.php">
                                    <img src="images/product/icecream.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">New Arrival</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="shop.php" class="product-title-link">Ice Cream Cup</a>
                                        </h5>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">₹ 25</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="shop.php">
                                    <img src="images/product/pouche.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Low Price</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="shop.php" class="product-title-link">pouches</a>
                                        </h5>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">₹ 35</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="shop.php">
                                    <img src="images/product/cofficecup.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.html" class="product-title-link">Coffee Cup</a>
                                        </h5>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">₹45</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <a href="shop.php" class="view-all">View All Products</a>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">Pack</a>Quipo</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Pack Quipo</strong></p>
                        <br>
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
