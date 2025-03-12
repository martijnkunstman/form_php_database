<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo "Hello World";?>

    <form action="result.php" method="post">

    <input id="voornaam" type="text" name="voornaam" placeholder="Voornaam">
    <input id="achternaam" type="text" name="achternaam" placeholder="Achternaam">
    <input id="email" type="email" name="email" placeholder="Email">

    <button type="submit">Verzenden</button>


    </form>
</body>
</html>