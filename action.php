<?php 
$conn = new mysqli('localhost', 'root', '', 'xenonnation');
//var_dump($row['id']);
// die();$customer_name= $_POST['cname'];


$name=$_POST['name'];
$email=$_POST['email']
$phone=$_POST['phone']
$message=$_POST['message']


$test=mysqli_query($conn,"INSERT INTO  contact_us (user_name, user_mail,user_phone,user_msg) VALUES ('$name','$email','$phone','$message')");

if($test==1){
    $_SESSION["PAGE"]= "prateek";
    header('location:contactus.php');

}
?>
<?php
$to = "mohitsrai@live.in,info@activprint.in";
$subject = "Active Print, Contact Request.";

$message = "
<html>
<head>
<title>Contact Request found!</title>
</head>
<body>
<h1 style='color : gray;'>Active Print</h1>
<h3 style='color:#9A7035'>$customer_name Tried to contact you!<br></h3>

<b>Name</b> : $customer_name <br>
<b>e-mail</b> : $customer_email <br>
<b>Contact No.</b> : $customer_no <br>
<b>Messege</b> : $customer_msg <br>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: info@activprint.in' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>