<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $text = $_GET['text'];
    $bad_word = $_GET['word'];
    ?>

    <!-- Testo inserito -->
    <h2>Testo inserito</h2>
    <p>
        <?php echo $text; ?> 
    </p>
    <h4>Lunghezza testo: <?php echo strlen($text); ?></h4>

    <!-- Testo inserito con parola censurata -->
    <h2>Testo con parola censurata</h2>
    <p>
        <?php 
        $censored_text = str_replace($bad_word, '***', $text);
        echo $censored_text;
        ?>
    </p>
    <h4>Lunghezza testo censurato: <?php echo strlen($censored_text); ?></h4>
</body>
</html>