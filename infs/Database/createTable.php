<?php
 include "dbConnect.php"; // Step 1- Database Connection. Specify DB name
// Step 2- Create SQL Query String
$sql_1 = "USE squ";

$result_1 = mysqli_query($conn, $sql_1);

$sql_2 = "CREATE TABLE student (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        gpa float(3, 2) NOT NULL,
        email VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        password VARCHAR(40)
        )";
$result_2 = mysqli_query($conn, $sql_2); // Step 3-Query Execution

if ($result_2) // Step 4- Check if query has any errors
    echo "Students Table Successfully Created!!";

   else
    echo "Error Creating Table: " . mysqli_error($conn);

mysqli_close($conn); // Step 5 – Close the connection
?>
