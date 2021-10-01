<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App propinas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Calculador de propinas</h1>
    <form action="./processes/calculo.proc.php" method="post">
        <input type="text" name="cuenta" placeholder="Total de la cuenta..."><br>
        <select name="servicio">
            <option value="0.3">30% Excelente</option>
            <option value="0.2">20% Bueno</option>
            <option value="0.1" selected>10% Normal</option>
            <option value="0.05">5% Malo</option>
        </select><br>
        <input type="number" name="personas" placeholder="¿Cuantas personas van a pagar?"><br>
        <input type="submit" value="Calcular" name="submit"><br>
    </form>
    <?php
    if(isset($_REQUEST['res'])){
        echo "<p>total a pagar</p>";
        echo "<h3>".$_REQUEST['res']." por persona</h3>";
    }
    ?>
</body>
</html>