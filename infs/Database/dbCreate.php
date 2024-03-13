<?php
include "dbConnect.php"; // Step 1- Database Connection

$sql = "CREATE DATABASE SQU"; // Step 2- Create SQL Query String

$result = mysqli_query($conn, $sql); // Step 3-Query Execution

if ($result) // Step 4- Check if query has any errors
    echo "Database Successfully Created!!";

   else
    echo "Error Creating Database: " . mysqli_error($conn);

mysqli_close($conn); // Step 5 – Close the connection

?>
