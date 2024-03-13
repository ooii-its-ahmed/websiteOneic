     <?php 
        include "db_connect.php"; 
        session_start();
        

  
    $username = $_POST['username'];  
    $password = $_POST['pass'];  
      
      if(!empty($username) && !empty($password)){
          $sql = "select * from user where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       // $_SESSION['id'] = $row['id'];
       // $_SESSION['username'] = $row['username'];

        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            echo '<h5 class="h5" ><a href="main3.php">RETURN TO HOME PAGE</a><br></h5>';
            echo '<li><a href="update2.php">UPDATE ACCOUNT INFO</a></li>';
             $_SESSION['id'] = $row['id'];
             $_SESSION['username'] = $row['username'];
           // header("Location:update2.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
      }

?>  
<html>
<style>
    body {
    margin:0;
    background-color: floralwhite;
        }</style></html>