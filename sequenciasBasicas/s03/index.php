<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu nome</title>
</head>

<body>
    <h1>Olá, qual é o seu nome?</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="text" placeholder="Seu nome" name="name" id="name">
        <button type="submit">Enviar</button>
    </form>
    <?php 
    $name = $_REQUEST['name'] ;
    echo "Olá " . $name . ", é um prazer te conhecer." ;
    
    ?>

</body>

</html>