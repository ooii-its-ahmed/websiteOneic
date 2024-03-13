<?php 
    session_start();
    include "db_connect.php";

    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE user SET name='$name', email='$email', username='$username', password='$password'  where id='$id'";

    // echo $query;
    // die();

    $result = mysqli_query($conn, $query);

    if($result) {
    
    header('location:main3.php');
    }

    else
    mysqli_error($conn);







?>