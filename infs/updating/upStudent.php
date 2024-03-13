<?php 

    include "dbConnect.php";


    $query = "update student set name='".$_POST['std_name']."', address='".$_POST['add']."' where std_id=".$_POST['id'];

    // echo $query;
    // die();

    $result = mysqli_query($con_var, $query);

    if($result) {
    
    header('location:getStudents.php');
    }

    else
    mysqli_error($con_var);







?>