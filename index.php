<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="response.php" method="GET">
        <h2>inserisci la frase</h2>
        <label for="phrase"></label>
        <textarea name="phrase" cols="30" rows="10" id="phrase"></textarea>

        <h2>inserisci la parola che vuoi censurare</h2>
        <label for="censured"></label>
        <input type="text" name="censured" id="censured">
        <h2></h2>
        <button type="submit">VAI</button>
        <p>(frase di esempio CTRL + C)</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde est nisi quos dolores aliquam vero tempora voluptas, expedita inventore aperiam, iusto ipsam voluptate! Itaque, iste.</p>
    </form>

</body>
</html>