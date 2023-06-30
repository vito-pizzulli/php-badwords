<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Form</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <form action="./server.php" type="GET">
        <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
        <input type="text" name="word-to-censor" id="word-to-censor" placeholder="Inserisci la parola da censurare">
        <button type="submit">Conferma</button>
    </form>
</body>
</html>