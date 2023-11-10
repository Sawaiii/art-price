<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Здарова кабан</title>
</head>
<body>
<?php

if( $_GET['price']) {
    require('main.php');
    exit();
 };
 ?>
 
    <form action = "php $_PHP_SELF " method = "GET">
         Цена: <input type = "text" name = "price" >
        <input type = "submit" >
   </form>

</body>
</html>