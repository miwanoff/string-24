<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$b = 0;
?>

    <h<?=$b;?>>Header <?=$b;?></h<?=$b;?>>
    <?php
echo (($b) ? 'true' : 'false'); // помилка
?>
</body>

</html>