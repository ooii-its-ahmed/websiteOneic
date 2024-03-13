<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $db = "infs";


   $con_var = mysqli_connect($server, $username, $password, $db);

   if(!$con_var)
    die("Error Occured! ". mysqli_connect_error());




?>