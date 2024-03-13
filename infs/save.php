else if($cate = "gaming"){
    
     if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = '../images/category/gaming/'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";

                $image = ".$destFolder.$fileName.";
    
}
else{
    
     if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = '../images/category/football/'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";

                $image = ".$destFolder.$fileName.";
    
}