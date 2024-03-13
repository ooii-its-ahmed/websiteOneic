<?php
    include "db_connect.php"; 
  //  echo "<br><br>";

    echo '<h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5>';
    echo '<h5 class="h5" ><a href="add_products.php">RETURN Add Product</a><br></h5>';

     if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileSize = $_FILES['file']['size'];
                $fileType = $_FILES['file']['type'];
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg", "jpeg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = 'database/images2/'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";


 
    $image = $destFolder.$fileName;
     

    
    
     


    //$name = $_POST['id'];
    $b_name = $_POST['b_name'];
    $b_price = $_POST['b_price'];
    
   
    if(!empty($b_name) && !empty($b_price) && !empty($image)){
         $sql_2 = "INSERT INTO bouquet (name, price, picture)
    VALUES ('$b_name', '$b_price', '$image')";

    $result_2 = mysqli_query($conn, $sql_2);

   

    if ($result_2)
    echo "image Successfully Added!!";

   else
    echo "Error While Inserting image: " . mysqli_error($conn);

    }
    
     



        
   
    


mysqli_close($conn);

?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>