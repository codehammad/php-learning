<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Page</title>
</head>
<body>
     <form action="testform1.php" method="get">
        Name: <input type="text" name="fname"><br><br>
        
        Age: <input type="text" name="age"><br><br>

        <input type="submit" name="save">
    </form> 

   <!--  PHP_SELF  -->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="fname"><br><br>
        
        Age: <input type="text" name="age"><br><br>

        <input type="submit" name="save">
    </form>

    <?php
       if(isset($_POST["save"])){
          echo $_POST["fname"]. "<br>";
          echo $_POST["age"]. "<br>";
      } 
    ?> 
</body>
</html>