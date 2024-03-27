<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Exercicío de porcentagem</h1>
        <form action="<?= $_SERVER ['PHP_SELF'] ?>" method="get">

            <input type="number" name="number1" id="number1" placeholder="x é ..." min="1">
            <button type="submit"> calcular </button>

        </form>

        <section id="result">
            <?php 
$numberX = (int) $_GET ['number1'] ??1 ;
$variable1 = (int) $numberX * 0.5 ;
echo "<p><h4>50% de " . $numberX . " corresponde a " . $variable1 ."</p></h4>";
$variable2 = (int) $numberX * 0.05 ;
echo "<p><h4>5% de " . $numberX . " corresponde a " . $variable2 ;
?>

        </section>
    </main>

</body>

</html>