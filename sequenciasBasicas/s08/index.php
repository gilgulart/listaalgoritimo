<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conversor de distâncias</h1>
    <form action="<?= $_SERVER ['PHP_SELF'] ?>" method="get">
        <input type="number" name="meter" id="meter" placeholder="sua distância em metros" step="0.001">
        <button type="submit">Converter</button>
    </form>
    <?php 
    $meter = $_GET ['meter'] ;
    $kilometer = $meter / 1000 ;
    $centimeter = $meter * 100 ;
    $milimiter = $meter * 1000 ;
    $decameter = $meter / 10 ;
    $hectometer = $meter / 100 ;
    $decimeter = $meter * 10 ;
    echo  number_format($kilometer,5,'.'). " Km <br>" ;
    echo number_format($hectometer,5,'.'). " Hm <br>" ;
    echo number_format( $decameter,2,'.','.') . " Dam <br>" ;
    echo number_format( $centimeter, 2 ,'.','.') . " cm <br>" ;
    echo number_format( $milimiter,2,'.','.') . " mm <br>" ;
    echo number_format ($decimeter, 2,'.','.') . " dm" ;
    

    
    
    ?>
</body>

</html>