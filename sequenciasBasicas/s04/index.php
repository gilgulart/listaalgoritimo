<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa</title>
</head>

<body>
    <h1>O carro passou em qual velocidade?</h1>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <input type="number" name="km" id="km">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    $velocity = $_REQUEST['km'] ;
    $multa = ($velocity - 80) *5 ;
    if ($velocity > 80) {
        echo "Você recebeu uma multa por excesso de velocidade no valor de: R\$" . number_format($multa, 2, ',','.') ;

    }
    
    ?>
</body>

</html>