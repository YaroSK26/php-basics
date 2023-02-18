<?php 
 include "db.php";
 Connection();
 SelectFun();

//kontrola ci bol formular odoslany
    if(isset($_POST["submit"])){
        deleteFun();
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php">index</a>

 <form action="delete.php" method="post" >

      <select name="id" id="">
        <?php 
             while($row = mysqli_fetch_assoc($resultREAD)){
             $id=  $row["id"];
             echo " <option value='$id'>$id</option>";
        }?>
      </select>
	  <input type="submit" value="Odoslat" name="submit"><br>


   </form>
    
</body>
</html>