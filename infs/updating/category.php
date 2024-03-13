<?php 

include "dbConnect.php";

if(isset($_POST['upload'])){


    if( isset($_FILES['picture']) &&
        $_FILES['picture']['error'] === UPLOAD_ERR_OK ){
            
            $cat = $_POST['category'];

            $destFolder = 'images/';
            
            $tempPath = $_FILES['picture']['tmp_name'];
            $fileName = $_FILES['picture']['name'];

            $dest = 'images/'.$fileName;
           

            move_uploaded_file($tempPath,$dest);

     $qry = "insert into album
     (category, path) values ('$cat','$dest')";

     $result = mysqli_query($con_var, $qry);

     if(!$result)
            die(mysqli_error($con_var));


    }

    else
    echo "Error Occurred!!";

}

// Getting Images



?>

<html>

<body>
     
    <form action="test.php" method="post" enctype="multipart/form-data">
        <select name="category" id="">
            <option value="nature">Nature</option>
            <option value="football">Football</option>

        </select>
        <input type="file" name="picture">
        <input type="submit" name="upload" value="Upload">


    </form>

    <hr>

    <form action="test.php" method="post">
        <select name="show_category" id="">
            <option value="nature">Nature</option>
            <option value="football">Football</option>

        </select>

        <input type="submit" name="display" value="Display">
    </form>
<?php 

if(isset($_POST['display'])){

    $category = $_POST['show_category'];

    $selQry = "select path from album where category ='".$category."'";

     

    $res = mysqli_query($con_var, $selQry);

    if($res){

        if(mysqli_num_rows($res)){
            
            while($row = mysqli_fetch_assoc($res)){
                echo "<img src='".$row['path']."' width='100' height='100'> ";
                echo "<br><br>";
            }

        }
    }
        

   

}


?>


    </body> 
    
    </html>