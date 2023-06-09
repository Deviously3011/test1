<!DOCTYPE html>
<html>
<head>
    <title>Producten Selecteren</title>
</head>
<body>
    <?php
    // Database connectie-instellingen
    $host = 'localhost:3307';
    $db   = 'winkel';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    try {
        // Een verbinding maken met de database
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $conn = new PDO($dsn, $user, $pass, $options);

        // Deel 1: Hoe je alle gegevens selecteert zonder variabelen
        echo "<h2>Hoe je alle gegevens selecteert in een query zonder variabelen</h2>";

        $stmt = $conn->query("SELECT * FROM producten");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Het weergeven van alle gegevens
        foreach ($result as $row) {
            echo "Product Naam: " . $row['product_naam'] . "<br>";
            echo "Product ID: " . $row['product_id'] . "<br>";
            echo "Prijs per Stuk: " . $row['prijs_per_stuk'] . "<br>";
            echo "Omschrijving: " . $row['omschrijving'] . "<br>";
            echo "<br>";
        }

        // Deel 2: Hoe je een enkele rij selecteert met placeholders
        echo "<h2>Hoe je een enkele rij selecteert met placeholders</h2>";

        $productCode = 1;

        $stmt = $conn->prepare("SELECT * FROM producten WHERE product_id = ?");
        $stmt->execute([$productCode]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Het weergeven van de enkele rij
        echo "Product Naam: " . $row['product_naam'] . "<br>";
        echo "Product ID: " . $row['product_id'] . "<br>";
        echo "Prijs per Stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br>";

        // Deel 3: Hoe je een enkele rij selecteert met named parameters
        echo "<h2>Hoe je een enkele rij selecteert met named parameters</h2>";

        $productCode = 2;

        $stmt = $conn->prepare("SELECT * FROM producten WHERE product_id = :code");
        $stmt->bindValue(':code', $productCode);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Het weergeven van de enkele rij
        echo "Product Naam: " . $row['product_naam'] . "<br>";
        echo "Product ID: " . $row['product_id'] . "<br>";
        echo "Prijs per Stuk: " . $row['prijs_per_stuk'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br>";
    } catch (PDOException $e) {
        echo "Fout bij het verbinden met de database: " . $e->getMessage();
    }
    ?>
</body>
</html>
