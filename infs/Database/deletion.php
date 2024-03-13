<?php
    include "dbConnect.php";
    echo "<br><br>";


    $sql = "USE squ";

    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Using squ";
    }
    else{
        die("error, can not use squ");
    }
    echo "<br><br>";

    $sql_2 = "DELETE FROM faculty WHERE name = ''";

    $result_2 = mysqli_query($conn, $sql_2);

     if ($result_2){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";



mysqli_close($conn);
?>