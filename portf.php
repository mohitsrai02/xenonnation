<?php 
$conn = new mysqli('localhost', 'root', '', 'xenonnation');
//var_dump($row['id']);
// die();
$id = $_POST['id'];

 $sql = "select * from portfolio where proj_id='$id'";
 
 $res = mysqli_query($conn,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 $id  = $row['proj_id'];
 $nam = $row['proj_name'];
 $andr = $row['android'];
 $ios = $row['ios'];
 $web = $row['web'];
 $type = $row['proj_type'];
 $desc = $row['proj_des'];
 $icon = $row['proj_icon'];
 $img = $row['proj_img'];

 /*array_push($result, 
 array('item'=>$row[0],$row[1]));
 */

$result[]= array('id'=> $id,'nam'=> $nam,'andr'=> $andr,'ios'=> $ios,'web'=> $web,'type'=> $type,'desc'=> $desc,'icon'=> $icon,'img'=> $img);
}

 echo json_encode($result);
 
 mysqli_close($conn);
?>