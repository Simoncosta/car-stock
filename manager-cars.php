<?php
$filename = "cars.txt";
$cars = file($filename, FILE_IGNORE_NEW_LINES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Cars</title>
</head>
<body>
    <h1>Manager cars</h1>
    <ul>
    <?php 
        foreach($cars as $car) {
        list($brand, $model, $year, $price) = explode("|", $car);
    ?>
        <li>
            Brand: <?php echo $brand ?>
        </li>
        <li>
            Model: <?php echo $model ?>
        </li>
        <li>
            Year: <?php echo $year ?>
        </li>
        <li>
            Price: <?php echo $price ?>
        </li>
        <hr>
    <?php
        }
    ?>
    </ul>    
    <a href="index.html">Cadastrar mais carros</a>
</body>
</html>