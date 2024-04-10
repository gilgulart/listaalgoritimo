<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Informações sobre o funcionário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="text" name="worker" id="worker" placeholder="O seu nome aqui...">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    $worker = (float) $_REQUEST ['worker'] ;
    require_once "class.php" ;
    $maria = new Worker("Maria do Carmo",1850,45) ;
    $maria-> menssage() ;
    ?>
</body>

</html>