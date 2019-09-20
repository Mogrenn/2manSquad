<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Are these fruits?</title>
    <meta name="description" content="The purpose of this page is to show if a banana or a apple is a fruit!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
	
        $banan_ar_frukt = true;
        $apple_ar_frukt = true;
        if ($banan_ar_frukt && $apple_ar_frukt)
              header("location: https://www.lexico.com/en/explore/is-a-banana-a-fruit-or-a-herb");
		  
    ?>
</body>
</html>
<?php
try{
	
	error_log('nu har vi kört denna X antal gånger', 3, 'test.log');

}catch(Exception $e){
	
	echo 'Caught exception: ', $e->getMessage(), "\n";
	
}
?>
