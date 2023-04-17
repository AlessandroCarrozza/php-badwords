<?php

    $paragraph = $_GET["paragraph"];
    $censuredWord = $_GET["censuredWord"];

    $censuredParagraph = str_replace($censuredWord, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Output</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <p>
            <?php echo $paragraph; ?>
        </p>

        <h4>
            <?php echo "La lunghezza del paragrafo è di " . strlen($paragraph) . " caratteri." ?>
        </h4>

        <p>
            <?php echo $censuredParagraph; ?>
        </p>

        <h4>
            <?php echo "La lunghezza del paragrafo censurato è di " . strlen($censuredParagraph) . " caratteri." ?>
        </h4>
    </div>
</body>
</html>