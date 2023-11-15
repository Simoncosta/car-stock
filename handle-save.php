<?php
if($_POST['brand']) {
    $brand = htmlspecialchars($_POST['brand']);
    $model = htmlspecialchars($_POST['model']);
    $year = $_POST['year'];
    $price = $_POST['price'];

    $data = "$brand|$model|$year|$price\n";
    $file = "cars.txt";

    file_put_contents($file, $data, FILE_APPEND);

    echo "Registrado o carro com sucesso.";
}
?>
<hr>
<a href="index.php">Voltar para o registro de carros</a>