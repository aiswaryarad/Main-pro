<?php
$pincode=$_POST['pincode'];
$data=file_get_contents('http://www.postalpincode.in/api/pincode/'.$pincode);
$data=json_decode($data);
if(isset($data->PostOffice['0'])){
    $arr['state']=$data->PostOffice['0']->State;
    $arr['district']=$data->PostOffice['0']->District;
    echo json_encode($arr);
  
}
else{
echo 'no';
}
?>