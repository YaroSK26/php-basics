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

    <?php echo time();?>
    <h1>Cokiessssss</h1>
</body>
</html>

<?php

$name = "cookiesOdYarka";
$value = 183;
$expiration= time() + (60*60*24*365); 

setcookie($name, $value, $expiration);

if(isset($_COOKIE["cookiesOdYarka"])){
    $Visitor=  $_COOKIE["cookiesOdYarka"];
    echo $Visitor;
}else {
    $Visitor = "";
}

?>
