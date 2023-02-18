<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">index</a><br>
</body>
</html>

<?php 
//injection   $username = mysqli_real_escape_string($connection , $username); - zneši pravdepodobnost pisania sql kody do formulara

//password security 
 $hashFormat = "$2y$10$";
 $salt = "blaznivafunkcenahesla9";
 $hashFormat_salt = $hashFormat.$salt;
 $password = crypt($password, $hashFormat.$salt );
 echo $password;

?>