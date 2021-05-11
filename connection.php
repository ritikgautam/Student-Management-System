<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "";
}
else{
    die("Connection failed due to".mysqli_connect_error());
}
?>