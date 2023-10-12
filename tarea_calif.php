<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$calif = $_POST["calif"];
$calificacion = (int)$calif;  
    if($calif >= 0 && $calif <= 3){
        echo "<h1>Tienes que repetir la clase<h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }
    else if($calif >= 4 && $calif <= 5){
        echo "<h1>Echale ganitas<h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }else if($calif >= 6 && $calif < 7) {
        echo "<h1>apenas y pasaste<h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }else if($calif >= 7 && $calif <= 8) {
        echo "<h1>very good<p><h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }else if($calif >= 9 && $calif <= 10) {
        echo "<h1>eres el mejor<h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }else{
        echo "<h1>tu calificacion es incorrecta, por favor introduce un numero valido<h1>";
        echo "<a href='index.php'>Al incio</a>";   
    }
?>
</body>
</html>