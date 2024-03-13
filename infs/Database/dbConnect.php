<?php

//Step
$servername = "localhost"; // or provide the URL or IP address
$username = "root";
$password = "";
//$db = "infs"; //only after creating the database

// Step 2 - Create connection

$conn = mysqli_connect($servername, $username, $password);

// Step 3 - Check connection

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
    }
echo "Connected Successfully";






?>