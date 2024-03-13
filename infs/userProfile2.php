<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body align="center">
    <table border="1">
        <th colspan="2"><?php echo "Welcome ", $_POST["fName"], "!"; ?></th>
        <tr>
            <td colspan="2">
            <?php
                if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                $tempPath = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileSize = $_FILES['file']['size'];
                $fileType = $_FILES['file']['type'];
        
                $file_name = explode(".", $fileName);
                $fileExt = strtolower(end($file_name));

                $allowedExt = array("pdf", "pptx", "png", "jpg");

                    if (in_array($fileExt, $allowedExt)===true){
                        $destFolder = '../images'; 
                move_uploaded_file($tempPath,$destFolder.$fileName);
                    }
                    else
                        echo "Only pdf and pptx are allowed file extensions";
                }

                else
                    echo "Something went wrong with the upload";

                    echo "<img src=".$destFolder.$fileName." width='100' height='100'>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><?php echo $_POST["fName"], " ", $_POST["LName"]; ?></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><?php echo $_POST["mail"]; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $_POST["gender"]; ?></td>
        </tr>
        <tr>
            <td>Hobbies</td>
            <td><?php
                $name = $_POST['hobbies'];
                foreach ($name as $hobbies){ 
                    echo $hobbies, ", ";
                }
                ?></td>
        </tr>
        <tr>
            <td>Full Address</td>
            <td><?php echo $_POST["add"], " ", $_POST["city"]; ?></td>
        </tr>
        <tr>
            <td>Passion</td>
            <td><?php echo $_POST["passion"]; ?></td>
        </tr>
    </table>
</body>
</html>