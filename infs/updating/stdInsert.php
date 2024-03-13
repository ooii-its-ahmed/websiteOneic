<?php
    include "dbConnect.php"; 
    echo "<br><br>";
/*
    if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileSize = $_FILES['file']['size'];
                $fileType = $_FILES['file']['type'];
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = '../images/'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";
*/

    $id = $_POST['id'];
    $name = $_POST['fName'];
    $pass = $_POST['pass'];
    $date = $_POST['date1'];
    $gpa = $_POST['gpa'];
    $address = $_POST['add'];
   // $spec = implode($_POST['spec']);
    //$gender = $_POST['gender'];
   // $image = ".$destFolder.$fileName.";
     


    $sql_1 = "USE squ";

    $result_1 = mysqli_query($conn, $sql_1);

    if ($result_1)
        echo "database Successfully used!!";

        else
        echo "Error using database: " . mysqli_error($conn);

        
   
     $sql_2 = "INSERT INTO student_2 (id, name, gpa, address, reg_date, password)
    VALUES ('$id', '$name', '$gpa', '$address', '$date', '$pass')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2)
    echo "image Successfully Added!!";

   else
    echo "Error While Inserting image: " . mysqli_error($conn);



mysqli_close($conn);

?>
