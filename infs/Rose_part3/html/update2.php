<?php
  //  session_start();
    include "login_success.php";
?>

<html>
    
<?php
    
    //$_SESSION['id'] = $_POST['']

    $id = $_SESSION['id'];

    if($id){

        include "db_connect.php";

        $qry = "select * from user where id=$id";
        
        $result = mysqli_query($conn, $qry);

        if($result){

            if(mysqli_num_rows($result))
            {
                while($row = mysqli_fetch_assoc($result)){

                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $username = $row['username'];
                    


                }



            }



        }

        else
        echo mysqli_error($conn);


 }
    
?>
    
    
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }
    
    </style>
    
    
    
<body>
    
    <header style="color: white;">
         <h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5></header>  
<form class="formm" method="post" target="_blank" action = "update_acc.php">
       
    
    <p><input type="text" required class="service" name="name" value="<?php echo $name;  ?>"></p>
    <p><input type="text" placeholder="Your Email" required class="service" name="email" value="<?php echo $email;  ?>"></p>
    <p><input type="text" placeholder="Your Username" required class="service" name="username" value="<?php echo $username;  ?>"></p>
    <p><input type="password" placeholder="Your Password" required class="service" name="password" value="<?php echo $password;  ?>"></p>
     
     
        <br>
        
    <p><button class="send" type="submit" style="width: 20%; color: white; background-color: black">SEND</button></p>
    

    </form>
    
    
    
    </body>





</html>