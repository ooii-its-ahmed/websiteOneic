<?php
    session_start();

    include "db_connect.php"; 
    echo "<br><br>";

    unset($_SESSION["id"]);

    unset($_SESSION["name"]);

    unset($_SESSION["username"]);

    header("Location:main3.php");

    
    
?>