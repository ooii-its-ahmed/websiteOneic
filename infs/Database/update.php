<?php
    include "dbConnect.php";
    echo "<br><br>";

    // use database

    $sql = "USE squ";

    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Using squ";
    }
    else{
        die("error, can not use squ");
    }
    echo "<br><br>";

    // update table

    $sql_2 = "UPDATE faculty SET name = 'zlatan' WHERE name = 'ahmed'";

     $result_2 = mysqli_query($conn, $sql_2);

     if ($result_2){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";
    



?>