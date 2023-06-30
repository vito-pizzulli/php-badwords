<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Form</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts VT323 Regular 400 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <h1>PHP Badwords</h1>
        <form action="./server.php" type="GET">
            <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
            <input type="text" name="word-to-censor" id="word-to-censor" placeholder="Inserisci la parola da censurare">
            <button type="submit">Conferma</button>
        </form>
    </main>
</body>
</html>