<?php
    session_start();


    echo "welcome ". $_SESSION["username"], " from ". $_SESSION["country"];


?>   
<!DOCTYPE html>
<html>

    <body>
    
    <br>
    
    
    <?php 
     
        $name = "Ahmed";
    
        echo "<H4>", "Hello $name ",$name.", Welcome to the world of PHP!", "<h4>", "<br>";
        echo "hi $name";
    

    ?>
    <br>
    <?php
    
        $x = (10 * 10) ** 0.5;
        
        echo $x, "<br>";
    
    ?>
    
    <?php
        $length = "5ft";
     echo "the type of $length is ", gettype($length), "<br>";
    
        settype($length, "int");
    
        echo "the type of $length is ", gettype($length), "<br>";
        
    ?>

    <?php
        $y = 2.5;    
    
        var_dump($y);
        echo "<br>";
    ?>
    
    <?php
        
        $z = 1;
        
        while($z <= 10){
            
            echo "2 x $z = ", (2 * $z), "<br>";
            $z++;
        }
        echo "<br>";
    ?>
        
        
        <?php
            
            echo "<table border = '1'>";
                $a = 1;
                while($a <= 10){
            
                    echo "<tr>";
            
                        echo "<td> 2 x $a </td>";
                        echo "<td>", ($a * 2), "</td>";
            
            
                    echo "</tr>";
                    $a++;
            
                }   
        
            echo "</table>";
            echo "<br>";
        ?>
        
        <?php
        
            $num = array(5, "Ahmed", 15.23, 20);
            
            foreach($num as $item){
                
                echo "item value is : $item";
                echo "<br>";
            }
            echo "<br>";
        
        ?>
         <?php
            
            echo "<table border = '1'>";
                $num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
                
                foreach($num as $item){
                    echo "<tr>";
            
                        echo "<td> 2 x $item </td>";
                        echo "<td>", ($item * 2), "</td>";
            
            
                    echo "</tr>";
                    
                }   
        
                    echo "</table>";
                    echo "<br>";
        ?>
        
         <?php
            
            echo "<br>";
        
            function myTest() {
                $p = 0;
                echo $p;
                 $p++;
                
            }

            myTest();
            echo "<br>";
            myTest();
            echo "<br>";
            myTest();
            echo "<br>";
        ?> 
        
        <?php
            echo "<br>";
            
            function myTest2() {
               STATIC $p = 0;
                echo $p;
                 $p++;
                
            }

            myTest2();
            echo "<br>";
            myTest2();
            echo "<br>";
            myTest2();
            echo "<br>";
        ?> 

        
        <?php
            
           echo 5 <=> 4;
        
         ?>
        
         <?php
         echo "<br>";
        echo "<br>";
        
            $feeling = "Ahmed";
            
           function sayHello($msg){
               echo $msg;
               $dummy = "Returning value";
               return $dummy;
           }
        
            $ret_val = sayHello($feeling);
            echo "<br>";
            
        
         ?>
        
        <?php
        
        $ellie = 5;
            
        function joel(){
            global $ellie;
            echo $ellie;
            
        }
        
        joel();
        
        ?>
        
        
        
        
        
        
    </body>
</html>