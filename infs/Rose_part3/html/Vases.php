<?php
session_start();
?>
<html>
    
    <title>
        Vases
    </title>
        
          <meta name="keywords" content=" blue, vase, tulip, white, colorful">
      <meta name="description" content="This is a website of a flower shop">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
      <style type="text/css">

 ul { list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden; 
     background-color: black; }

li {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
          }

            
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
        }
        
 .price {
   color: grey;
   font-size: 22px;
        }
          
.ratting {
    color: orange;
                 }
        
.card button:hover {
    opacity: 0.7;
        } 
        
#cart {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color:black;
    text-align: center;}
          
.header {
    position:sticky ; 
    top:0; right: 0;
          }
       

 .body{
     background-color: floralwhite;
           }
          
.h5{
    color:white; 
    font-size:20px; 
    text-align: center;
           } 
          
#bask{
    position:fixed; 
    top: 2%; 
    left:90%;
        }

        </style>
        
        

          
        
     <!-- Links (sit on top) -->

         <header style="color: white;">
          <h5 class="h5" ><a href="../html/main3.php">RETURN TO HOME PAGE</a><br><br><br></h5>
        <nav>
            
     <a href="../html/cart2.php"  id="bask"> <input align="right" type="image" src="../images/cart5.png" width="40" value="View Cart"></a>
      
    
     
     </nav>
        
  </header>
        
        
 <!-- Vases Container -->
      <body class="body">
          <div>  
<!--
      <table cellspacing="50" >
        
        <tbody>
 <tr> 
 
         <div>
 
   <td>    <div class="card">
        <img src="../images/v1.jpeg" width="200" height="250" align="center">
        <p> <b>White Vase</b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star "></span>
        <p class="price">6.000 OMR</p>
        <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button></p>
     </div>
             </td>   

<td>
        <div class="card">
        <img src="../images/v2.png" width="200" height="250" align="center" >
            <p><b> Pink Vase </b></p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star "></span>
        <p class="price">10.000 OMR</p>
             <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button></p>
        </div>
</td>
<td>
        <div class="card">
        <img src="../images/v3.png" width="200" height="250" align="center">
        <p><b> Colorful Vase </b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star ratting"></span>
        <p class="price">15.000 OMR</p>
             <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button>
        </div>
</td>
<td>
        <div class="card">
        <img src="../images/v4.png" width="200" height="250" align="center">
        <p><b> White Vase </b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star "></span>
           <span  class="fa fa-star "></span>
        <p class="price">7.000 OMR</p>
             <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button></p>
        </div>
</td>
<td>
        <div class="card">
        <img src="../images/v5.png" width="200" height="250" align="center">
        <p><b> Blue Vase </b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star "></span>
           <span  class="fa fa-star "></span>
        <p class="price">12.000 OMR</p>
             <p><input type="number" placeholder="NO." required name="Quantity" min="1" style="box-sizing: inherit"></p>
        <p><button id="cart">Add to Cart</button></p>
        </div>
</td>
            
     </div>
            </tr>
          </tbody>
              </table>
-->
          </div>
       
             <?php
    include "db_connect.php"; 
    echo "<br><br>";


    $sql_2 = "SELECT * FROM vase";

    $result_2 = mysqli_query($conn, $sql_2);



    
        
     
        


    if($num_rows = mysqli_num_rows($result_2)){
        while($row = mysqli_fetch_assoc($result_2)){
            $pic = $row["picture"];
            $name = $row["name"];
            $price = $row["price"];
            $username = $_SESSION['username'];
           // echo $pic;
            echo ' <td>   <div class="card">
        <img src="'.$pic.'" width="200" height="200" align="center"/>
        <p> <b>', $name, '</b> </p>
        <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting "></span>
           <span  class="fa fa-star ratting"></span>
           <span  class="fa fa-star "></span>
        <p class="price">', $price, ' Rials</p>';
        if(!empty($username)){
        echo '<form action="pre_cart.php?pic='.$pic.'&name='.$name.'&price='.$price.'&username='.$username.'" method="post" target="_blank" enctype="multipart/form-data">
            
            
                
             <p><input type="number" placeholder="NO." required name="quantity" min="1" style="box-sizing: inherit"></p>
             <p><button id="cart">Add to Cart</button></p>

     </form>';
    }
    else{
      echo '<h5 class="h5"><a href="../html/login.html">Login to add</a></h5>';
    }
        
           echo '</div>
            </td>';      
                
            echo "<br><br>";
        }
    }

    else{
        echo"no rows";
    }




?>


<!-- Footer -->
<footer style="color: white; background-color: black;">
      
      <center>
          <p>CONTACT US:</p>
          <a href="tel:+968 1234 5678"><img src="../images/phone.png" width="40" alt="Phone Number"></a>
          <a href="https://www.twitter.com"><img src="../images/twitter.png" width="40" alt="Twitter"></a>
          <a href="https://www.instagram.com"><img src="../images/instagram.png" width="40" alt="Instagram"></a>
      
      <hr>
     
            
              <p>©2022 RozenBouquet.com</p>
               </center>



  </footer>
   
            </body>
         
          </html>