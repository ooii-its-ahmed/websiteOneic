<?php
    session_start();

?>
<html>

      
   <title>Cart</title>
      <meta name="keywords" content="product, price, subtotal, checkout">
      <meta name="description" content="This is a website of a flower shop">
         <style type="text/css">
           ul { list-style-type: none;margin: 0;padding: 0;overflow: hidden; background-color: #333; }

       li {float: left;display: block;color: white;text-align: center;padding: 14px 16px;text-decoration: none;}

        
        
            
         .h5{
               color:white; font-size:20px; text-align: center
           }

  </style>
  <script src="../script/jq.js"></script>
     
    <body style="background-color: floralwhite">
    
        <header style="color: white;">
          <h5 class="h5" ><a href="../html/main3.php">RETURN TO HOME PAGE</a><br><br><br></h5>
        
  </header>
    
    <center><h1 style="color: white; background-color: black">MY CART  </h1></center>
    
    
    </body>
    
    <?php
        // session_start();
    include "db_connect.php"; 
    echo "<br><br>";
$username = $_SESSION['username'];


    $sql_2 = "SELECT * FROM cart where username='$username'";

    $result_2 = mysqli_query($conn, $sql_2);



    
        $counter = 0;
     
        


    if($num_rows = mysqli_num_rows($result_2)){
        while($row = mysqli_fetch_assoc($result_2)){
            $pic = $row["picture"];
            $name = $row["name"];
            $price = $row["price"];
            $quantity = $row["quantity"];
            //$username = $_SESSION['username'];
          // echo $pic;
            echo ' <td>   <div class="card">
        <img src="'.$pic.'" width="200" height="200" align="center"/>
        <p> <b>', $name, '</b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star "></span>
           <p class="price">', $quantity, '</p>
        <p class="price">', $price, ' Rials</p>
        

        
            </div>
            </td>';   
            $counter += ((int)$price * $quantity);
             echo '<h5 class="h5"><a href="../html/delete_item.php?table=cart&name='.$name.'&username='.$username.'">Delete Item</a></h5>';
             echo "<br><br>";
             echo "<br><br>";
            
        }
    }

    else{
        echo "<br><br>";
        echo"CART IS EMPTY";
        echo "<br><br>";
    }


    echo "Total Amount: ", $counter, " Rials";
    echo "<br><br>";
     echo '<h5 class="h5"><a href="../html/check_out.php?price='.$counter.'">Check Out</a></h5>';
     echo '<h5 class="h5"><a href="../html/delete_cart.php?username='.$username.'">Empty Cart</a></h5>';
?>
    
    
    
    






</html>