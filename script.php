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

</body>

</html>