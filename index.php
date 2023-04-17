<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="GET" action="censures.php">
        <label for="paragraph">Scrivi un paragrafo</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>

        <label for="censuredWord">Scrivi la parola che vuoi censurare</label>
        <input type="text" name="censuredWord" id="censuredWord">

        <button type="submit">Invia</button>
    </form>
</body>
</html>