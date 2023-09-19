<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "jobconnect";

$con = mysqli_connect($servername , $username , $password , $database);

if(!$con){
    echo "error-->".mysqli_connect_error();
}

?>