<?php
$phrase = $_GET['phrase'];
$secondWord = $_GET['censured'];
$censured = str_replace($secondWord , "***", $phrase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>originale</h2> 
   <p>lunghezza frase = <?php echo strlen($phrase)?><span> caratteri</span></p>
   
   <?php
    echo $phrase;
   ?>

   <h2>con parole censurate</h2>
    <?php
    echo $censured;
    ?>
</body>
</html>