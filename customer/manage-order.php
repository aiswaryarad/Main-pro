<?php
include "../connection.php";
$email=$_SESSION["email"];
if(!isset($_SESSION["email"])) 
{
    header("Location:../login.php");
}
?>
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
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css">
<style>
.divScroll {
overflow:scroll;
height:500px;
width:850px;
}
</style>
</head>
<body>
    <script language="javascript" type="text/javascript">
        var popUpWin=0;
        function popUpWindow(URLStr, left, top, width, height)
        {
        if(popUpWin)
        {
        if(!popUpWin.closed) popUpWin.close();
        }
        popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
        }

</script>
</head>
<body>
<div class="navbara">
  <a href="#home">PackQuipo</a>
  <div class="dropdowna">
    <button class="dropbtna"><i class="bi fa-lg bi-person-circle"> welcome seller</i>
    </button>
    <div class="dropdowna-content">
      <a href="../logout.php">Logout</a>
    </div>
  </div> 
</div>
       <!--  </div> -->
    <!-- </nav>   -->
     <br/>
     <br/> 
    <div class="container-fluid">
    
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light sidenav">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        
                    <li class="nav-item">
                            <a href="seller_index.php" class="nav-link align-middle px-0">
                            <i class="fa fa-home"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-ui-checks"></i> <span class="ms-1 d-none d-sm-inline">House Types</span>
                            </a>
                        </li> -->
                       
                        <li>
                            <a href="insert-product.php" class="nav-link px-0 align-middle">
                            <i class="fa fa-th"></i> <span class="ms-1 d-none d-sm-inline">InsertProduct</span></a>
                        </li>
                        <li>
                            <a href="manage-products.php" class="nav-link px-0 align-middle">
                            <i class="fa fa-th"></i> <span class="ms-1 d-none d-sm-inline">ManageProduct</span></a>
                        </li>
                        <li>
                            <a href="manage-order.php" class="nav-link px-0 align-middle">
                            <i class="fa fa-th"></i> <span class="ms-1 d-none d-sm-inline">ViewsOrders</span></a>
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
                    
                    <hr>-->
                </div>
            </div> 
            <div class="divScroll">           
<div class="span9">
<div class="content">
<div class="module">
<div class="module-head">
    
<h3>Orders</h3>
</div>
<!-- <div class="module-body table"> -->
<?php if(isset($_GET['del']))
{?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
<?php } ?>
<br />  
<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="10%">
<thead>
   
<tr>
<th>#</th>
<th> Name</th>
<th>Email /Contact no</th>
<th>Product </th>
<th>Shipping Address</th>
<th>Qty</th>
<th>Amount </th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$query1=mysqli_query($con,"select * from users where email='$email'");
while($row=mysqli_fetch_array($query1))
{
   $user_id=$row['user_id'];
   $query2=mysqli_query($con,"select * from seller where seller.user_id='$user_id'"); 
   while($row=mysqli_fetch_array($query2))
   {
$seller_id=$row['seller_id'];
$query=mysqli_query($con,"SELECT *from users,product,orders,order_items where orders.user_id=users.user_id and order_items.order_id =orders.id and product.product_id=order_items.product_id and product.seller_id='$seller_id'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($row['username']);?></td>
<td><?php echo htmlentities($row['email']);?>/<br><?php echo htmlentities($row['contact_no']);?></td>
<td><?php echo htmlentities($row['product_name']);?></td>
<td><?php echo htmlentities($row['customer_address']);?></td>
<td><?php echo htmlentities($row['quantity']);?></td>
<td><?php echo htmlentities($row['total_price']);?></td>
<td>
                    <?php 
                    
                    if($row['or_status']=="0")                     
                        echo                                   
"<a href=processing.php?id=".$row['id']."><button class='btn btn-primary'onclick='myFunction1()' >processing</button></a>";
                    else if($row['or_status']=="1") 
                        echo 
"<a href=shipped.php?id=".$row['id']."><button class='btn btn-btn btn-danger' onclick='myFunction2()' >shipped</button></a>";
                    else 
echo 
"<a href=deliverd.php?id=".$row['id']."><button class='' onclick='myFunction2()' >deliverd</button></a>";
  ?>

      </td>
</td>
</tr>
<?php $cnt=$cnt+1; }}}?>
</tbody>
</table>
</div>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
$('.datatable-1').dataTable({
"pageLength": 5,
"lengthMenu": [5, 10, 20, 25, 50]
});
$('.dataTables_paginate').addClass("btn-group datatable-pagination");
$('.dataTables_paginate > a').wrapInner('<span />');
$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
});

</script>
</body>
<?php ?>