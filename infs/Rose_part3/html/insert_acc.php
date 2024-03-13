<?php
    include "db_connect.php"; 
    echo "<br><br>";


    //$name = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
   
    
     


   //sql_1 = "USE squ";

  //$result_1 = mysqli_query($conn, $sql_1);

        
   if(!empty($username) && !empty($password) && !empty($email) && !empty($name)){
       $sql_2 = "INSERT INTO user (name, email, username, password)
    VALUES ('$name', '$email', '$username', '$password')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2)
    echo "Account Successfully Added!!";

   else
    echo "Error While registering: " . mysqli_error($conn);

   }
     
echo '<h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5>';

mysqli_close($conn);

?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>