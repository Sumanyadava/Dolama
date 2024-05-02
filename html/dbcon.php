<?php
$server = "localhost";
$uname = "root";
$pass = "";
$db = "twenty";

$conn = mysqli_connect($server,$uname,$pass,$db);
if ($conn) {
    echo "sucess";
}else{
    die("Error".mysqli_connect_error());
}

?>