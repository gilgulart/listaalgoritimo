<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atividade 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">

        <header>
            <h1>Conversor m/s para Km/h</h1>
            <form action=" <?= $_SERVER ['PHP_SELF'] ?> " method="get">
                <label for="km"></label>
                <input type="number" id="inputms" name="inputms" placeholder="insira m/s" min="1" />
                <input type="submit" value="calcular" id="button" />
            </form>
        </header>
        <section>
            <?php 
$initialValue = (int) $_REQUEST['inputms']??1;
$result = $initialValue * 3.6;
echo "<h4>O valor " . $initialValue ."m/s em km é de " .  $result . " km/h</h4>";
?>
        </section>
    </div>
</body>

</html>