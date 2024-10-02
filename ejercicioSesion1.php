<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Supermarket management/body</h1>
    <label for="name">Worker name</label>
    <input type="text">
    <h1>Chosee product</h1>
    <label for="product"></label>
    <select name="product" id="product">
        <option value="softDrink">soft drink</option>
        <option value="milk">milk</option>
        
    </select>
  
        <label for="quantity">  <h1>Product quantity:</h1></label>
        <input type="text">
        <input type="submit" name="add"  id="add">
        <input type="submit" name="remove" id="remove">
        <input type="submit" name="reset" id="reset">

        <h1>Inventary:</h1>
        <p>worker: <?php $worker ?></p>
        <p>units milk: <?php  $milk ?></p>
        <p>Units soft drink: <?php $softDrink?> </p>
        
</body>
</html>