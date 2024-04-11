<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alistamento</title>
</head>

<body>
    <h1>Quanto tempo falta para o seu alistamento?</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="born" placeholder="em qual ano você nasceu?">
        <button type="submit">Enviar</button>
    </form>
    <?php 
$yearBorn = $_REQUEST ['born'] ;
$enlistment = $yearBorn - 2024 ;
$foul = $enlistment + 18 ;


if ($enlistment <= 18) {
    echo "<p> Você ainda não chegou na idade do seu alistamento, ainda faltam " . $foul . " anos </p>";
} 

if ($enlistment = 18 ) {
echo "<p>Está no ano do seu alistamento</p>" ;
}
if ($enlistment >= 18) {
echo "Você já foi dispensado" ;
}



?>
</body>

</html>