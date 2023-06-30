<?php
    $text = $_GET['paragraph'];
    $word = $_GET['word-to-censor'];

    /* Printing the inserted paragraph and its length */
    echo $text . strlen($text);

    /* Printing the inserted paragraph (with the censored chosen word) and its length */
    echo str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Server</title>
</head>
<body>

</body>
</html>