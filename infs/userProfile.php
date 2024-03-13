<html>
    
    <body>
        
        


        <?php print_r($_POST); ?>
        
         <?php
            
            echo "<table border = '1'>";
               
                
            
            echo "<tr>";
            
                echo "<td colspan='2'>welcome ", $_POST["f_name"], "</td>"; 
           // echo $_POST["f_name"];
             
            echo "</tr>";
        
            echo "<tr>";
            
                echo "<td colspan='2'>", $_POST["pic"], "</td>";
                
             
            echo "</tr>";
        
        echo "<tr>";
            
                echo "<td >full name </td>";
                echo "<td >", $_POST["f_name"], " ",$_POST["l_name"], " </td>";
             
            echo "</tr>";
        
        echo "<tr>";
            
                echo "<td >email </td>";
                echo "<td >", $_POST["email"], " </td>";
             
            echo "</tr>";
        
        echo "<tr>";
            
                echo "<td >gender </td>";
                echo "<td >", $_POST["gender"], " </td>";
             
            echo "</tr>";
        
        echo "<tr>";
            
                echo "<td >hobbies </td>";
                echo "<td >", "foreach($hob as $item){
                                echo 'item value is :, $item' 
                                }"
                , " </td>";
             
            echo "</tr>";
        echo "<tr>";
            
                echo "<td >full address </td>";
                echo "<td >", $_POST["address"], " </td>";
             
            echo "</tr>";
        
         echo "<tr>";
            
                echo "<td >your passion </td>";
                echo "<td >", $_POST["passion"], " </td>";
             
            echo "</tr>";
                    
            
                 
        
            echo "</table>";
            echo "<br>";
        ?>
    
    
    </body>
foreach($num as $item){
                
                echo "item value is : $item";
                echo "<br>";
            }
    
    
    $_POST["hob"][0]
</html>