<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/css1.css">
    <script type="text/javascript" src="javascript/js1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<title></title>
</head>
<body>
<center><h1 style='margin-top:5%;'>Welcome </h1></center>
 
<div style="background-color:white; margin-top:5%;">
<center>
        <hr>
        <h4>Article</h4>
        <h1>Windows 8</h1>
        <p>
<?php
    $link = mysqli_connect("localhost", "root", "", "php_test");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
        $sql=mysqli_query($link,("SELECT messege FROM messege WHERE msg_id = '1'"));
        $row = mysqli_fetch_assoc($sql);
        echo $row['messege'];
?>
</p></center>
</div>
</body>
</html>