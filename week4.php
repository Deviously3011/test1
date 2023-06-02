<?php
// Deel 1: Selecteer alle data uit de tabel en print op een mooie volgorde in je index.php file
// Comment: Hoe je alles selecteert in een query zonder variabele

try {
    $pdo = new PDO('mysql:host=localhost;dbname=winkel', 'root', '');

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query om alle data te selecteren
    $query = 'SELECT * FROM producten';

    // Voorbereiden van de statement
    $stmt = $pdo->prepare($query);

    // Uitvoeren van de statement
    $stmt->execute();

    // Resultaten ophalen als een associatieve array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Print de resultaten op een mooie manier
    echo "<h2>Alle producten:</h2>";
    echo "<table>";
    echo "<tr><th>Product Code</th><th>Product Naam</th><th>Prijs</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['product_code'] . "</td>";
        echo "<td>" . $row['product_naam'] . "</td>";
        echo "<td>" . $row['prijs'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Deel 2: Selecteer alleen het product met product_code 1 en print het in je index.php file
// Comment: Hoe je een single row selecteert met placeholders

try {
    // Query om een enkele rij te selecteren met placeholders
    $query = 'SELECT * FROM producten WHERE product_code = ?';

    // Voorbereiden van de statement
    $stmt = $pdo->prepare($query);

    // Bind de waarde aan de placeholder
    $productCode = 1;
    $stmt->bindValue(1, $productCode);

    // Uitvoeren van de statement
    $stmt->execute();

    // Resultaat ophalen als een associatieve array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Print het resultaat
    echo "<h2>Product met product_code 1:</h2>";
    echo "<table>";
    echo "<tr><th>Product Code</th><th>Product Naam</th><th>Prijs</th></tr>";
    echo "<tr>";
    echo "<td>" . $result['product_code'] . "</td>";
    echo "<td>" . $result['product_naam'] . "</td>";
    echo "<td>" . $result['prijs'] . "</td>";
    echo "</tr>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Deel 3: Selecteer alleen het product met product_code 2 en print het in je index.php file
// Comment: Hoe je een single row selecteert met named parameters

try {
    // Query om een enkele rij te selecteren met named parameters
    $query = 'SELECT * FROM producten WHERE product_code = :code';

    // Voorbereiden van de statement
    $stmt = $pdo->prepare($query);

    // Bind de waarde aan de named parameter
    $productCode = 2;
    $stmt->bindValue(':code', $productCode);

    // Uitvoeren van de statement
    $stmt->execute();

    // Resultaat ophalen als een associatieve array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Print het resultaat
    echo "<h2>Product met product_code 2:</h2>";
    echo "<table>";
    echo "<tr><th>Product Code</th><th>Product Naam</th><th>Prijs</th></tr>";
    echo "<tr>";
    echo "<td>" . $result['product_code'] . "</td>";
    echo "<td>" . $result['product_naam'] . "</td>";
    echo "<td>" . $result['prijs'] . "</td>";
    echo "</tr>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
