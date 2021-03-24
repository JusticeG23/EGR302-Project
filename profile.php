<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset = "UTF - 8">
     <meta name= "viewport" content = " width= device-width, initial-scale=1.0">
     <meta http-equiz="X-UA-Compatible" content="ie=edge">
     <title>Form </title>
     </head>
     <body>
    
     <?php 
     if(isset($_POST["submit"]])){
       $weight= $_POST["Weight"];
       $Height= $_POST["Height"];
       $Age= $_POST["age"];
       $BMI = $_POST["BMI"];
       $sex= $_POST["Sex"];
     }
     ?>
      <form action= "results.php" method= "POST">
      <div>
      <text>Weight: </text><input type="text" name="Weight">
      </div>
      <div>
      Height: <input type="text" name="Height">
      </div>
      <div>
       Age: <input type="text" name="age">
      </div>
      <div>
     Body Mass Index: <input type="text" name="BMI"> 
      </div>
      <div>
      Sex: <input type="text" name="Sex"> 
      </div>
      <div>
       <button type= "reset"> reset </button>
      <input type="submit" value="submit" name="submit"> 
      </div>
      </form>
     </body>
     </html>
