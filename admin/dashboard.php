
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\includelink.css">

    <!-- Fancy box css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" 
    integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
   <!----> 

<!---->
</head>
<body>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#EC691D;"><p>PackQuipo</p>
    <!-- <div class="container-fluid"> -->
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#171715 ;">Welcome Admin <i class="bi fa-lg bi-person-circle"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <a class="dropdown-item" href="?profile">Edit Profile</a> -->
                        <a class="dropdown-item" href="?change">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
   <!--  </div> -->
</nav>        
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary mx-5 shadow-sm"><i class="fas fa-download fa-sm text-black-50"></i> Generate Report</a> -->
    </div> 

<!----->


<div class="container-fluid">
    
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light sidenav">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                <li class="nav-item">
                        <a href="dashboard.php" class="nav-link align-middle px-0">
                        <i class="fa fa-home"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-ui-checks"></i> <span class="ms-1 d-none d-sm-inline">House Types</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="manageuser.php" class="nav-link align-middle px-0">
                      <i class="bi bi-people-fill"></i> <span class="ms-1 d-none d-sm-inline">ManageUser</span>
                        </a>
                        <ul>
                        <a href="#"><li>Customer</li></a>
		                <a href="#"><li>Seller</li></a>
                        </ul>
                    </li>
                    <li>
                        <a href="category.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-th-large"></i> <span class="ms-1 d-none d-sm-inline">CreateCategory</span></a>
                    </li>
                    <li>
                        <a href="insert-product.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-th"></i> <span class="ms-1 d-none d-sm-inline">InsertProduct</span></a>
                    </li>
                    <li>
                        <a href="manage-products.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-th"></i> <span class="ms-1 d-none d-sm-inline">ManageProduct</span></a>
                    </li>
                    <!--<li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-view-list"></i> <span class="ms-1 d-none d-sm-inline">View</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0" id="tables" onclick="showAllUser()"> <span class="d-none d-sm-inline">Users</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Services</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="?payment" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-currency-rupee"></i> <span class="ms-1 d-none d-sm-inline">Payments</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers Talk</span> </a>
                    </li>
                </ul>
                
                <hr>
            </div>
        </div>
        
        Ajax linlk -->
                

        
        <div class="container-fluid mt-5 mx-3" id="mainpage">
                    <?php
                        /* if(isset($_GET['viewuser']))
                        {
                            include('viewuser.php');
                        } */
                       /* if(isset($_GET['dashboard']))
                        {
                            include('dashboard.php');
                        }
                        if(isset($_GET['houses']))
                        {
                            include('viewHouse.php');
                        }
                        if(isset($_GET['viewhouses']))
                        {
                            include('../viewProperty.php');
                        }
                        
                        if(isset($_GET['payment']))
                        {
                            include('payment.php');
                        }
                        
                        if(isset($_GET['id']))
                        {
                            include('userdata.php');
                        }
                        if(isset($_GET['change']))
                        {
                            include('../password_change.php');
                        }*/
                        
                    ?>
        </div>
    </div>
</div>
 


<!----->

    <!-- Content Row -->
    <div class="row">

        <!-- Total Users Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    /*$sql="SELECT * from users where role=0";
                                    $num=mysqli_num_rows($sql);
                                    echo $num;*/
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people-fill fa-lg text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total property Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                               Total Category</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    /*$row=mysqli_query($dbc,"SELECT * FROM `tbl_property`");
                                    $num=mysqli_num_rows($row);
                                    echo $num;*/
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-th-large"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Service Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Products
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0
                                        <?php
                                        /*  $row=mysqli_query($dbc,"SELECT * FROM `tbl_service`");
                                            $num=mysqli_num_rows($row);
                                            echo $num; */
                                        ?>
                                    </div>
                                </div>
                            <!--  <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-th"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
            <!-- Pending Requests Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <script type="text/javascript" src="../home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Fancy box  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" 
    integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <!--boostrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    
</body> 
</html>
    