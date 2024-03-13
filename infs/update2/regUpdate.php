<!DOCTYPE html>
<?php


    $id = $_GET['id'];

    if($id){

        include "dbConnect.php";

        $qry = "select * from student where std_id=$id";
        
        $result = mysqli_query($con_var, $qry);

        if($result){

            if(mysqli_num_rows($result))
            {
                while($student = mysqli_fetch_assoc($result)){

                    $name = $student['name'];
                    $date = $student['adm_date'];
                    $password = $student['password'];
                    $address = $student['address'];
                    $gpa = $student['gpa'];


                }



            }



        }

        else
        echo mysqli_error($con_var);


 }
    
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table  align="center">
        <form action="upStudent.php" method="post">
        <tr>
            <td colspan="2"> <h1>Student Registration Form</h1></td>
        </tr>

        <tr>
            <td>Student Name</td>
            <td><input type="text" name="std_name" value="<?php echo $name;  ?>"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" value="<?php echo $password;  ?>"></td>
        </tr>


        <tr>
            <td>Address</td>
            <td><textarea name="add" id="" cols="30" ><?php echo $address; ?></textarea></td>
        </tr>


        <tr>
            <td>GPA</td>
            <td><input type="text" name="gpa" value="<?php echo $gpa;  ?>"></td>
        </tr>

        <tr>
            <td>Admission Date</td>
            <td><input type="date" name="reg_date" value="<?php echo $date;  ?>" disabled></td>
        </tr>
        <input type="hidden" name="id" value="<?php echo $id ;?>">
        <tr>
            
            <td align="center" colspan="2"><input type="submit" value="Update Profile">

            
        
        
        </td>
        </tr>





    </form>

    </table>





</body>
</html>