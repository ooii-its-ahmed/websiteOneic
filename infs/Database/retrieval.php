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

    // select table

    $sql_2 = "SELECT * FROM faculty";

    $result_2 = mysqli_query($conn, $sql_2);

     if ($result_2){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";

    // show number of rows

    $num_rows = mysqli_num_rows($result_2);

    echo $num_rows;
    echo "<br><br>";

    // fetch rows

    $row = mysqli_fetch_assoc($result_2);
        
     if ($row){
        echo "fetch success";
    }
    else{
        die("fetch unsuccess");
    }
    echo "<br><br>";

    print_r($row);
    echo "<br><br><hr>";


    if($num_rows = mysqli_num_rows($result_2)){
        while($row = mysqli_fetch_assoc($result_2)){
            echo "name: ", $row["name"], "<br>",
                "password: ", $row["password"], "<br>",
                "date: ", $row["date"], "<br>",
                "email: ", $row["email"], "<br>",
                "major: ", $row["major"], "<br>",
                "picture: ", $row["picture"], "<br>",
                "specialization: ", $row["specialization"], "<br>",
                "gender: ", $row["gender"], "<hr>";
                
                echo "<br><br>";
        }
    }

    else{
        echo"no rows";
    }




mysqli_close($conn);
?>