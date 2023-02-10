
<?php

include_once "../config/dbconnect.php";

$id=$_GET['id'];
$query="UPDATE order_items SET or_status=2 where id = $id"; // delete query;

$data=mysqli_query($conn,$query);

if($data){
	echo"shipped";
	/*echo '<script type="text/javascript">window.onload = function () { alert("successfully deactivated); }
            </script>';0*/
	header("Location:manage-order.php");
}
else{
	echo"Not able to delete";
}

?>