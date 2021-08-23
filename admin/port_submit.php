<?php
$conn = new mysqli('localhost', 'root', '', 'xenonnation');
$target_img = "../img/portfolio/full/";
$target_icon = "../img/portfolio/icon/";
$target_file1 = $target_img . basename($_FILES["p_image"]["name"]);
$target_file2 = $target_icon . basename($_FILES["p_icon"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
   move_uploaded_file($_FILES["p_image"]["tmp_name"], $target_file1);
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
   move_uploaded_file($_FILES["p_icon"]["tmp_name"], $target_file2);
}
$aa = explode("/",$_SERVER['PHP_SELF']);
$aaa= $aa[1];


$a = $_SERVER['HTTP_REFERER'];
$b = explode("/",$a);
$cc = $b[0]."//".$b[2]."/".$aaa.$target_file1;
$ccc = explode(".",$cc);
$c = $ccc[0].$ccc[2].".".$ccc[3];


$r = $_SERVER['HTTP_REFERER'];
$p = explode("/",$r);
$oo = $p[0]."//".$p[2]."/".$aaa.$target_file2;
$ooo = explode(".",$oo);
$o = $ooo[0].$ooo[2].".".$ooo[3];

$pname= $_POST['p_name'];
$ptype= $_POST['p_type'];
$pandroid= $_POST['p_android'];
$pios= $_POST['p_ios'];
$pweb= $_POST['p_web'];
$pdesc= $_POST['p_desc'];

echo "<br><br>";



$test=mysqli_query($conn,"INSERT INTO portfolio (proj_name,android,ios,web,proj_type,proj_des,proj_icon,proj_img) VALUES ('$pname','$pandroid','$pios','$pweb','$ptype','$pdesc','$o','$c')");

if($test){
    echo "<br> success";
}
else{
    echo "<br>you fail";
}
header("location:forms-basic.php");

?>
