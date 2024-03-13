<?php
    session_start();

    $_SESSION["username"] = "Ahmed";
    $_SESSION["country"] = "Oman";


    echo "welcome ". $_SESSION["username"], " from ". $_SESSION["country"];


?>   


<?php 
        $name = "Ahmed";
    
        echo  " <h4>Hello $name ",$name.", Welcome to the world of PHP!</h4>" , "hi <br>";
        echo "hi $name";
        
        echo "<br>";
        echo "<br>";



        $num = array("num1"=>5, "name"=>"Ahmed", "num2"=>15.23, "num3"=>20);
            
            foreach($num as $item=>$value){
                
                echo "the $item is : $value";
                echo "<br>";
            }
            echo "<br>";


        print_r($num);

    echo "<br>";
        
        var_dump($num);
  echo "<br>";
  echo "<br>";


    function addNumbers(int $a, int $b){
        
        return $a + $b;
        
    }

    echo addNumbers(5, 5);

  echo "<br>";

 function addNumbers2(int $a, int $b){
        
        echo $a + $b;
        
    }

 addNumbers2(5, 5);



    ?>
    <br><br>



    <?php
























    ?>
