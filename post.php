<!DOCTYPE html>
<html>
<head>
    <title>POST Formulier</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["naam"]) && isset($_POST["achternaam"]) && isset($_POST["leeftijd"]) && isset($_POST["adres"]) && isset($_POST["email"])) {
            $naam = $_POST["naam"];
            $achternaam = $_POST["achternaam"];
            $leeftijd = $_POST["leeftijd"];
            $adres = $_POST["adres"];
            $email = $_POST["email"];

            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "Naam: " . $naam . "<br>";
            echo "Achternaam: " . $achternaam . "<br>";
            echo "Leeftijd: " . $leeftijd . "<br>";
            echo "Adres: " . $adres . "<br>";
            echo "Email: " . $email . "<br>";
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Naam: <input type="text" name="naam"><br>
        Achternaam: <input type="text" name="achternaam"><br>
        Leeftijd: <input type="text" name="leeftijd"><br>
        Adres: <input type="text" name="adres"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>