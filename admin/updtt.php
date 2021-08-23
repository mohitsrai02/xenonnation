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


/*
$gend=$row['gender'];
$dept=$row['dept_name'];
$dob=$row['birth_date'];
$prnt=$row['parent_name'];
$ecode=$row['emp_code'];
$pfno=$row['pf_number'];
$uhid=$row['adhaar_no'];
$bnkac=$row['bank_ac'];
$bnknam=$row['bank_name'];
$ifsc=$row['ifsc_code'];
$locadd=$row['address'];
$peradd=$row['permanent_address'];
$qual=$row['qualification'];
$city=$row['city'];
$mob=$row['mobile_no'];
$phone=$row['phone_no'];
$email=$row['email'];
$joindate=$row['joining_date'];
$releavedate=$row['relieve_date'];
$offday=$row['off_day'];
$basis=$row['basis'];
$hra=$row['hra'];
$da=$row['da'];
$ptax=$row['p_tax'];
$slry=$row['net_salary'];
$pf=$row['pf'];
$conv=$row['conv'];
$itax=$row['i_tax']; 
*/
  /*,'gend'=> $gend,'dept'=> $dept,'dob'=> $dob,'prnt'=> $prnt,'pfno'=> $pfno,'ecode'=> $ecode,'pfno'=> $pfno,'uhid'=> $uhid,'bnkac'=> $bnkac,'bnknam'=> $bnknam,'ifsc'=> $ifsc,'locadd'=> $locadd,'peradd'=> $peradd,'qual'=> $qual,'city'=> $city,'mob'=> $mob,'phone'=> $phone,'email'=> $email,'joindate'=> $joindate,'releavedate'=> $releavedate,'offday'=> $offday,'basis'=> $basis,'hra'=> $hra,'da'=> $da,'ptax'=> $ptax,'slry'=> $slry,'pf'=> $pf,'conv'=> $conv,'itax'=> $itax*/
 
 echo json_encode($result);
 
 mysqli_close($conn);
?>