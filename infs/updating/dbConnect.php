<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $db = "squ";


   $conn = mysqli_connect($server, $username, $password, $db);

   if(!$conn)
    die("Error Occured! ". mysqli_connect_error());

    else
        echo "connected succefully";



?>