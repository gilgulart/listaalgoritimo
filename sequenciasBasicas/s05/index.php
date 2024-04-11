<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expectativa de vida</title>
</head>

<body>
    <h1>Expectativa de Vida</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="perDay">Quantos cigarros você fuma por dia?</label>
        <input type="number" name="perDay">
        <br>
        <label for="manyYears">Há quantos anos você fuma?</label>
        <input type="number" name="manyYears">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    $perDay = $_REQUEST ['perDay'] ;
    $manyYears = $_REQUEST ['manyYears'] ;
    $cigarTotal = ($perDay * 365) * $manyYears ;
    $minutes = $cigarTotal * 10 ;
    $dayLoss = intdiv($minutes, 1440) ;
    echo "<p>Você perdeu <strong>" . $dayLoss . " dias</strong> da sua vida.</p>";
    echo "<p>Você perde <strong>10 minutos de vida</strong> a cada cigarro</p>" ;
    
    ?>
</body>

</html>