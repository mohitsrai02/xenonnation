<?php
$conn = new mysqli('localhost', 'root', '', 'xenonnation');

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '
            . $conn->connect_error);
}
?>