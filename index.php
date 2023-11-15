<?php
    $brands = [
        'Tesla',
        'Audi',
        'Porsche',
        'Honda',
        'Volvo',
        'Volkswagen',
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cars</title>
</head>

<body>
    <form action="handle-save.php" method="POST">
        <label>Brand (Marca):</label><br>
        <!-- FAZER CADASTRO DE MARCA E APRESENTAR AQUI -->
        <select name="brand" required>
            <option>Selecione um modelo</option>
            <?php
                foreach($brands as $brand) {
            ?>
                <option value="<?php echo $brand; ?>">
                    <?php echo $brand; ?>
                </option>
            <?php
                }
            ?>
        </select>
        <br><br>

        <!-- FAZER CADASTRO DE MODELO E APRESENTAR AQUI -->
        <label>Model (Modelo):</label><br>
        <input type="text" name="model" placeholder="Taykan" required />
        <br><br>

        <label>Year (Ano):</label><br>
        <input type="number" name="year" placeholder="2024" required />
        <br><br>

        <label>Price (Preço):</label><br>
        <input type="number" name="price" placeholder="108555,00" required />
        <br><br>

        <button type="submit">Salvar</button>
    </form>

    <a href="manager-cars.php">Ver gestão de carros</a>
</body>

</html>