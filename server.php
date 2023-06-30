<?php
    $text = $_GET['paragraph'];
    $word = $_GET['word-to-censor'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Server</title>
</head>
<body>
    <h1>PHP Badwords</h1>

    <h2>Paragrafo inserito e sua lunghezza:</h2>
    <span>
    <?php
        echo $text . " " . strlen($text);
    ?>
    </span>

    <h2>Paragrafo inserito (con parola scelta censurata) e sua lunghezza:</h2>
    <span>
    <?php
        echo str_replace($word, '***', $text) . " " . strlen($text);
    ?>
    </span>
</body>
</html>