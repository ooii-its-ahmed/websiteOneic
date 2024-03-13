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

        $cate2 = "cate";

if($cate2 = "football"){
    
    $sql_3 = "SELECT * FROM picture where category = 'football'";

    $result_3 = mysqli_query($conn, $sql_3);

     if ($result_3){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";
    
}
        else if($cate2 = "gaming"){
            
                $sql_3 = "SELECT * FROM picture where category = 'gaming'";

    $result_3 = mysqli_query($conn, $sql_3);

     if ($result_3){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";
            
        }
        
    else{
        
            $sql_3 = "SELECT * FROM picture where category = 'anime'";

    $result_3 = mysqli_query($conn, $sql_3);

     if ($result_3){
        echo "query success";
    }
    else{
        die("query unsuccess");
    }
    echo "<br><br>";
        
    }





    if($num_rows = mysqli_num_rows($result_3)){
        while($row = mysqli_fetch_assoc($result_3)){
            echo "id: ", $row["id"], "<br>",
                "category: ", $row["category"], "<br>";
            $pic = $row["pic"];
            echo $pic;
           echo  "<img src ='".$pic."' width='200' />", "<hr>";
                
                echo "<br><br>";
        }
    }

    else{
        echo"no rows";
    }


   
?>