<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kneadbread_users";

//actual connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//will check the connection

if ($conn ->connect_error){
    die ("Connection failed". $conn ->connect_error);
}

?>