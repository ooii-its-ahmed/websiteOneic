<html>
    

    <body>
    
        
        <b>Registration Form</b><br><br>
            
       <form action="insert.php" method="post" enctype="multipart/form-data">
           
            Name: <input type="text" name="fName"><br><br>
          
           Password: <input type="password" name="pass"><br><br>
           
           Dte of joining: <input type="date" name="date1"><br><br>
           
           Email: <input type="text" name="mail1"><br><br>
           
            <label for="major">major:</label>
            <select id="major" name="major">
              <option value="INFS">INFS</option>
              <option value="MNGT">MNGT</option>
              <option value="FINA">FINA</option>
            </select><br><br>
           
           Upload your Picture: <input type="file" name="file" accept=".pdf, .pptx, .png, .jpg"><br><br>
           
            Specialization: <br>
               <input type="checkbox" name="spec[]" value="computer science, ">computer sciece<br>
               <input type="checkbox" name="spec[]" value="accounting, ">accounting<br>
               <input type="checkbox" name="spec[]" value="programming, ">programming
           <br><br>
           
           Gender: 
           <input type="radio" name="gender" value="male">
           <label for="male">Male</label>
           <input type="radio" name="gender" value="female">
           <label for="female">Female</label><br><br>
           
          
            <input type="submit" value="Insert">
           
       </form>
   
    
    
    
    </body>
    
    



</html>