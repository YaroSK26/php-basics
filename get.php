<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">index
        
    </a>
    
<!-- method get
      <a href="index.php">index</a><br>
<p>get medthod</p>
    <form action="get.php" method="get">
<input type="text" name="username"> <br>
<input type="password" name="password"><br>
<input type="submit" value="odoslat">  -->

<p>post method</p>
<form action="get.php" method="post">
    <input type="text" name="username"><br>
    <input type="submit"  name="submit"value="odoslat"><br>
</form>


    </form>
    
</body>
</html>
<?php 
//post method
if(isset($_POST["submit"])){
    echo $_POST["username"];
}


//get method
    /*print_r($_GET);
    $id = 73;
    ?>
    <a href="get.php?id=<?php echo $id;?>&source=google">tu klikni</a>*/
?>