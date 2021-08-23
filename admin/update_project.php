<?php
$conn = new mysqli('localhost', 'root', '', 'xenonnation');
$target_img = "../img/portfolio/full/";
$target_icon = "../img/portfolio/icon/";
$target_file1 = $target_img . basename($_FILES["p_image"]["name"]);
$target_file2 = $target_icon . basename($_FILES["p_icon"]["name"]);

$q1 = strlen($_FILES["p_image"]["name"]);
$q2 = strlen($_FILES["p_icon"]["name"]);
var_dump($q1);
var_dump($q2);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
   move_uploaded_file($_FILES["p_image"]["tmp_name"], $target_file1);
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
   move_uploaded_file($_FILES["p_icon"]["tmp_name"], $target_file2);
}
$aa = explode("/",$_SERVER['PHP_SELF']);
$aaa= $aa[1];

if($q1 != 0){
    $a = $_SERVER['HTTP_REFERER'];
    $b = explode("/",$a);
    $cc = $b[0]."//".$b[2]."/".$aaa.$target_file1;
    $ccc = explode(".",$cc);
    $c = $ccc[0].$ccc[2].".".$ccc[3];
    echo $c;
    echo "<br>";
    }
if($q2!=0){
        $r = $_SERVER['HTTP_REFERER'];
        $p = explode("/",$r);
        $oo = $p[0]."//".$p[2]."/".$aaa.$target_file2;
        $ooo = explode(".",$oo);
        $o = $ooo[0].$ooo[2].".".$ooo[3];
        echo $o;
        echo "<br> ";
    }



$pname= $_POST['p_name'];
$ptype= $_POST['p_type'];
$pandroid= $_POST['p_android'];
$pios= $_POST['p_ios'];
$pweb= $_POST['p_web'];
$pdesc= $_POST['p_desc'];
$pid = $_POST['p_id'];
var_dump($_POST);

$test1=mysqli_query($conn,"UPDATE portfolio SET proj_name = '$pname', android='$pandroid', ios='$pios', web='$pweb', proj_type='$ptype', proj_des='$pdesc' WHERE proj_id = $pid;");

echo "<br>".$q1."<br>";
echo $q2;

if(($q1 != 0)&&($q2 == 0)){
        $test2=mysqli_query($conn,"UPDATE portfolio SET proj_icon='$c'  WHERE proj_id = '$pid';");
    }
if(($q2 != 0)&&($q1 == 0)){
    $test3=mysqli_query($conn,"UPDATE portfolio SET proj_img='$o' WHERE proj_id = '$pid';");
    }

if(($q2 != 0)&&($q1 != 0)){
    $test4=mysqli_query($conn,"UPDATE portfolio SET proj_img='$o',proj_icon='$c' WHERE proj_id = '$pid';");
    }

if($test1||$test2||$test3||$test4){
    echo "<br> success";
}
else{
    echo "<br> fail";
}

header('location:tables-basic.php');

?>

