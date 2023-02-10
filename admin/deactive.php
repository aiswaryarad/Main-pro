
<?php

include_once "../config/dbconnect.php";

$id=$_GET['id'];
$query="UPDATE users SET  Status=1 where user_id = $id"; // delete query;

$data=mysqli_query($conn,$query);

if($data){
	echo" deactivevate";
	/*echo '<script type="text/javascript">window.onload = function () { alert("successfully deactivated); }
            </script>';0*/
	header("Location:manageuser.php");
}
else{
	echo"Not able to delete";
}

?>