<?php
include "dbConnect.php"; 
    echo "<br><br>";

    $sql_1 = "USE squ";

    $result_1 = mysqli_query($conn, $sql_1);


    if ($result_1)
    echo "database used!!";

   else
    echo "Error database: " . mysqli_error($conn);
echo "<br><br>";


    
    if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = '../images/category/'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";

               
    

    $id = $_POST['id'];
    $cate = $_POST['cate'];
     $image = $destFolder.$fileName;



     $sql_2 = "INSERT INTO picture (id, category, pic)
    VALUES ('$id', '$cate', '$image')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2)
    echo "image Successfully Added!!";

   else
    echo "Error While Inserting image: " . mysqli_error($conn);
echo "<br><br>";


       



mysqli_close($conn);










?>