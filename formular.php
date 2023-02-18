
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>
  <a href="index.php">index</a><br>

</body>
</html>
      <?php 

  if(isset($_POST["submit"])){//isset pri prvom nacitani stranky kukne či sa odoslalo submit, ked sa odosle ukaze txt, get da info do adresy

   $username =  $_POST["username"];
   $password = $_POST["password"];


  //overenie ci aj meno a heslo bolo zapisane
   if($username && $password){
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
   }else { echo "nieco chyba";}


//meno je , heslo je
    $name = ["David","Markus"];
    $minimum = 3;
    $maximum = 10;
    echo "formular funguje";
    echo "<br>";
    echo  "meno je : ".$username;
    echo "<br>";
    echo "heslo je: ".$password;
    echo "<br>";
    

//moc dlhe a kratke meno
    if(strlen($username) <= $minimum ){
        echo "napiš si dlhšie meno";
        echo "<br>";
    }

    if(strlen($username) >= $maximum){
        echo "moc dlhe meno ";
        echo "<br>";
    }

    if(in_array($username,$name)){
        echo "možeš sa prihlasiť";
        echo "<br>";
    } else { echo "nie si david ani markus";echo "<br>";}
    
  }


  //prepojenie do databaze

    include_once "db.php";
    Connection();
    SelectFun();

  //crud - create, read, update,delete 
  // R - vybranie dat
  $query= "SELECT * FROM users";
   $resultREAD =  mysqli_query($connection,$query);
  if(!$resultREAD){
    die("databaza skapala".mysqli_error());
  }

   while($row = mysqli_fetch_assoc($resultREAD)){

  echo"<pre>";  
	print_r($row);
  echo "<br>";
  echo"<pre>";
   }

  
  
?>


