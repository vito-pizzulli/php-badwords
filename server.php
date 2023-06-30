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
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts VT323 Regular 400 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <h1>PHP Badwords</h1>
        <h2>Testo inserito - Lunghezza</h2>
        <p>
            <?php
                echo $text . " - " . strlen($text);
            ?>
        </p>
        <h2>Testo censurato - Lunghezza</h2>
        <p>
            <?php
            $censoredText = str_replace($word, '***', $text);
                echo $censoredText . " - " . strlen($censoredText);
            ?>
        </p>
    </main>
</body>
</html>