<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database,"3307");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {

}
 mysqli_query($conn,"SET NAMES 'utf8'");
 //mysqli_close($conn);
 ?>