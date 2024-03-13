
<?php
    session_start();
    include "db_connect.php"; 
    echo "<br><br>";

    
    $price = $_GET["price"];
   
    echo "Total Amount: ", $price, " Rials"; 

    echo '<fieldset>
            
            <legend><h3>Enter Credit Card INFO</h3></legend>
            
            <form action="payment.php" method="post" target="_blank" enctype="multipart/form-data">
            
                Name:<br>
                <input type="text" name="name"/><br><br>
            
                Card Number:<br>
                <input type="number" name="num"/><br><br>
                
                cvv:<br>
                <input type="number" name="cvv"/><br><br>
                
                <input type="submit" name="pay" value="Pay"/>
        
            </form>
            
        </fieldset>'
    
 




?>
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style>
    <body>
    
         
    
    
    
    
    </body>

</html>
