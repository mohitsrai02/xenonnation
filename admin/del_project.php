<?php
$conn = new mysqli('localhost', 'root', '', 'xenonnation');

$id = $_POST['id'];

$sql = "DELETE FROM portfolio where proj_id = '$id'";
$res = mysqli_query($conn,$sql);
$result = array();
if($res){
    $result[]= array('status'=>1,'message'=>'success');
}
else{
    $result[]= array('status'=>0,'message'=>'false');
}

echo json_encode($result);
mysqli_close($conn);
?>