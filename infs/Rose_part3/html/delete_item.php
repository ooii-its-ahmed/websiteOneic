<?php
        include "db_connect.php"; 
        session_start();
       // echo "<br><br>";

     echo '<h5 class="h5"><a href="../html/main3.php">RETURN TO HOME PAGE</a></h5>';
    echo '<h5 class="h5"><a href="../html/cart2.php">RETURN TO CART</a></h5>';

    $table = $_GET["table"];
    $name = $_GET["name"];
    $username = $_GET["username"];
    
   // echo $table;
    
  //  echo "<br>";
    
  //  echo $name;
 echo "<br><br>";

/*
    $sql_2 = "SELECT * FROM $table";

    $result_2 = mysqli_query($conn, $sql_2);

    if($num_rows = mysqli_num_rows($result_2)){
        while($row = mysqli_fetch_assoc($result_2)){
            $name = $row["name"];
        }
    }

    else{
        echo"no rows";
    }


  //  $name = $row["name"];
        */
     $sql_2 = "DELETE FROM $table WHERE name = '$name' AND username = '$username'";

    $result_2 = mysqli_query($conn, $sql_2);

     if ($result_2){
        echo "query success";
         header("Location:cart2.php");
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";


?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>