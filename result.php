<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Results van mijn form:
    <?php
    
    //read POST parameters

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];

    //print POST parameters

    echo ("<br>Voornaam: " . $voornaam);
    echo ("<br>Achternaam: " . $achternaam);
    echo ("<br>Email: " . $email);

    //----------- database connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formphp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<br><br>Connected successfully";

    //------------ insert data into database

    $sql = "INSERT INTO persoonsgegevens (voornaam, achternaam, email)
VALUES ('" . $voornaam . "', '" . $achternaam . "', '" . $email . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



    ?>
</body>

</html>