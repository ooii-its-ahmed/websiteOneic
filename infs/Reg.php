<html>
    <body align = "center">
        <b>Registration Form</b>
       <form action="userProfile2.php" method="post" enctype="multipart/form-data">
           First Name: <input type="text" name="fName"><br>
           Last Name: <input type="text" name="LName"><br>
           
           Email: <input type="text" name="mail"><br>
           
           Gender:
           <input type="radio" name="gender" value="male">
           <label for="male">Male</label>
           <input type="radio" name="gender" value="female">
           <label for="female">Female</label><br>
           
           Hobbies: 
               Reading<input type="checkbox" name="hobbies[]" value="reading"><br>
               Movies<input type="checkbox" name="hobbies[]" value="movies">
           <br>
           
           Street Address: <input type="text" name="add"><br>
           
           <label for="city">City:</label>
            <select id="city" name="city">
              <option value="muscat">Muscat</option>
              <option value="seeb">Seeb</option>
            </select><br>
           
           Passion: <textarea rows="1" name="passion" placeholder="passion!!!"></textarea><br><br>
           
           Upload your Picture: <input type="file" name="file"><br><br>
           
           <input type="submit" value="Register">
           
       </form>
    </body>
</html>