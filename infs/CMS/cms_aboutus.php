<html>

<?php 

    if(isset($_POST['update'])){

    include "dbConnect.php";

    $title = $_POST['title'];
    $content = $_POST['content'];

    $qry = "update aboutus set title_one= '$title', title_one_con='$content'";

    $exec = mysqli_query($con_var, $qry);

    if($exec)
     echo "<script> alert('Record Updated')</script>";

    else
     die(mysqli_error($con_var));



}


?>





    <body>
        
    <form action="cms_aboutus.php" method="post">

    Title: <input type="text" name="title" id=""> <br>
    Content:
    <textarea name="content" ></textarea> <br>

    <input type="submit" value="UpdateContent" name="update">



    </form>



    </body>



</html>