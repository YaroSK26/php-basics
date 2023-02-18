<?php 
//pripojenie databaze
include_once "db.php";
Connection();

//vyber dat z databaze
SelectFun();
   
  if(!$resultREAD){
    die("databaza skapala".mysqli_error());
  }

   // update dat z formuláře a dotaz do databáze, nemusi to tuj byt lebo je to v db.php

    if(isset($_POST["submit"])){
       UpdateFun();
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

   <form action="update.php" method="post" >

      <input type="text" placeholder="Meno" name="username"><br>
	  <input type="password" placeholder="Heslo" name="password"><br>

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