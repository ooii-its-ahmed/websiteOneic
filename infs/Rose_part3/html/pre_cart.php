<?php
    session_start();
    include "db_connect.php"; 
    echo "<br><br>";
    
    $username = $_GET["username"];
    $name = $_GET["name"];
    $price = $_GET["price"];
   $pic = $_GET['pic'];
    $quantity = $_POST['quantity'];
/*
    echo $quantity;
echo "<br><br>";
    echo $price;
echo "<br><br>";
    echo $name;
echo "<br><br>";
    echo $pic;
echo "<br><br>";
    echo $username;
    */

 $sql_2 = "INSERT INTO cart (username, name, picture, price, quantity)
    VALUES ('$username', '$name', '$pic', '$price', '$quantity')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2){
    echo "Successfully Added to Cart";
                    echo '<h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5>';
            echo '<li><a href="cart2.php">GO TO CART</a></li>';
            echo '<li><a href="Roses.php">GO TO ROSES</a></li>';
            echo '<li><a href="Vases.php">GO TO VASES</a></li>';
            echo '<li><a href="bouquets.php">GO TO BOUQUETS</a></li>';
        
    }
   else
    echo "Error While Inserting image: " . mysqli_error($conn);



mysqli_close($conn);

    
    $_SESSION['name'] = $_GET["name"];  
    $_SESSION['price'] = $_GET["price"];
    $_SESSION['pic'] = $_GET['pic'];
    $_SESSION['quantity'] = $_POST['quantity'];


?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>


