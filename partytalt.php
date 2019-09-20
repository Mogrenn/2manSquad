<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Git out of here</title>
    <meta name="description" content="The purpose of this page is to show if a banana or a apple is a fruit!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <img src="bilder/espresso.jpg">
    <?php
    try {
        $banan_ar_frukt = true;
        $apple_ar_frukt = true;
        if ($banan_ar_frukt && $apple_ar_frukt)
              header("location: https://www.lexico.com/en/explore/is-a-banana-a-fruit-or-a-herb");

    } catch (Exception $e) {

        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>
</body>
</html>
<?php
error_log('nu har vi kört denna X antal gånger', 3, 'test.log');
/*
  Git out of here!
  Syftet med denna hemsida är att visa om en banan eller äpple är en frukt
  (Kan det bli bättre än ovan????)
 */
?>
