<?php
    include "db_connect.php"; 
    //echo "<br><br>";

    echo '<h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5>';
   


    //$name = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $location = $_POST['location'];
    $req = $_POST['req'];
    $date = $_POST['date'];
   
    
     


   //sql_1 = "USE squ";

  //$result_1 = mysqli_query($conn, $sql_1);

        
   
     $sql_2 = "INSERT INTO service (name, email, phone_num, quantity, location, requirement, date)
    VALUES ('$name', '$email', '$phone', '$people', '$location', '$req', '$date')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2)
    echo "Applied for Service Successfully";

   else
    echo "Error While Applying: " . mysqli_error($conn);



mysqli_close($conn);

?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>