<?php

$paragraf = $_GET['paragraf'];
$bad_word = $_GET['bad_word'];

$paragraf_array = explode(' ', strtolower($paragraf));
$censured = str_replace(strtolower($bad_word), '***', $paragraf_array);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <div>
        La frase che hai scritto: <?php echo $_GET['paragraf']; ?>
    </div>
    <div>
        Contiene <?php echo strlen($_GET['paragraf']); ?> caratteri
    </div>
    <br><br><br>
    <div>
        La frase che hai scritto censurata: <?php echo implode(' ', $censured); ?>
    </div>
    <div>
        Contiene <?php echo strlen(implode(' ', $censured)); ?> caratteri
    </div>
</body>

</html>