<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Média</h1>
    <form action="<?=$_SERVER ['PHP_SELF'] ?>" method="get">
        <input type="number" name="nota1" placeholder="nota 1" value="<?= $nota1 ?>" step="0.1">
        <input type="number" name="nota2" placeholder="nota 2" value="<?= $nota2 ?>" step="0.1">
        <button type="submit">Calcular Média</button>
    </form>
    <br>
    <?php 
        $nota1 = (float) $_GET ['nota1'];
        $nota2 = (float) $_GET ['nota2'] ;
        $media = ($nota1 + $nota2) /2 ;
        echo " A média entre " . $nota1 . " e " . $nota2 . " é igual a " . $media ;
        
    
    ?>

</body>

</html>