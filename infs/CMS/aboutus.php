<html>






    <body>

    <?php 
    
    include "dbConnect.php";


    $qry = "select * from aboutus where id = (select MAX(id) from aboutus)";


    $exec = mysqli_query($con_var, $qry);

    if ($exec){

        if(mysqli_num_rows($exec)){

            while($data = mysqli_fetch_assoc($exec)){

                $title = $data['title_one'];
                $content = $data['title_one_con'];


            }

        }
        else
            echo "Coming soon!!";

    }
    else
        die(mysqli_error($con_var));
    
    
    
    
    ?>



        <center>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $content; ?></p>
        </center>
    </body>

</html>