<?php
$servername = "localhost";
$username   = "root";
$password = "";
$databasename = "xbase";

$conn = new mysqli($servername, $username, $password, $databasename);
if(!$conn){
    die('could not connect:'.mysqli_error());
}else{
    // echo 'Connected Successfully';
}

session_start();