<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style>
    <head>
        
        <title>Add new Products</title>
        
        <h5 class="h5"><a href="../html/main3.php">RETURN TO HOME PAGE</a></h5>
        
        <h5 class="h5"><a href="../html/add_products.php">Go Back</a></h5>
    </head>

    <body background-color="floral-white">
        
        <fieldset>
            
            <legend><h3>Add a new Bouquet:</h3></legend>
            
            <form action="insert_bouquet.php" method="post" target="_blank" enctype="multipart/form-data">
            
                Name of Bouquet:<br>
                <input type="text" name="b_name"/><br><br>
            
                The price:<br>
                <input type="number" name="b_price"/><br><br>
                
                Picture:<br>
                <input type="file" name="file"/><br><br>
                
                <input type="submit" name="add" value="Add Bouquet"/>
        
            </form>
            
        </fieldset>
        
                        
      <?php
    include "db_connect.php"; 
    echo "<br><br>";


    $sql_2 = "SELECT * FROM bouquet";

    $result_2 = mysqli_query($conn, $sql_2);



    
        
     
        


    if($num_rows = mysqli_num_rows($result_2)){
        while($row = mysqli_fetch_assoc($result_2)){
            $pic = $row["picture"];
            $name = $row["name"];
            $price = $row["price"];
          // echo $pic;
            echo ' <td>   <div class="card">
        <img src="'.$pic.'" width="200" height="200" align="center"/>
        <p> <b>', $name, '</b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star "></span>
        <p class="price">', $price, ' Rials</p>
         <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button></p>

        
            </div>
            </td>';   
    
            echo '<h5 class="h5"><a href="../html/delete_product.php?table=bouquet&name='.$name.'">Delete Bouquet</a></h5>';
             echo "<br><br>";
        }
    }

    else{
        echo"no rows";
    }




?>
       
    </body>


</html>