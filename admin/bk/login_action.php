<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "xenonnation");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$username=$_POST["uname"];
$pass=$_POST["pwd"];

$sql=mysqli_query($link,("SELECT * FROM xenon_admin WHERE user_name = '$username'"));
#$out = mysqli_query($link,$sql);
echo "<br>";
#var_dump($out);
    // output data of each row
    $row = mysqli_fetch_assoc($sql);
if($row['user_password']==$pass)
    {
        echo "Logged in as admin";
        header("Refresh:0 ; url=http://localhost/xenon/admin/admin_home.php");
            }
    else{
        echo "Invalid Username or password going back to login page in 5 seconds...";
        header("Refresh:5 ; url=http://localhost/xenon/admin/login.php");
   }
   ?>