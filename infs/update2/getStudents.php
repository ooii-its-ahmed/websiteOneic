<?php

include "dbConnect.php";

$ret_qry = "select * from student";

$exec = mysqli_query($con_var, $ret_qry);

if($exec){

   if(mysqli_num_rows($exec)){

        while($student = mysqli_fetch_assoc($exec)){

            echo "Student ID: ".$student['std_id']. "<br>";
            echo "Student Name: ".$student['name']. "<br>";
            echo "Address: ".$student['address']. "<br>";
            echo "Password: ".$student['password']. "<br>";
            echo "Admission Date: ".$student['adm_date']. "<br>";
            echo "GPA: ".$student['gpa']. "<br>";

            echo "<a href='regUpdate.php?id=".$student['std_id']."'>Update Information</a> <hr>";


        }

    


   }
   else 
        echo "Not Record Found";
        
   





}


else
echo "Cant Execute the Query". mysqli_error($con_var);





?>