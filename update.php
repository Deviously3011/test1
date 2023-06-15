<?php
// Je databaseverbinding hier
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
// Controleren of het formulier is ingediend
if (isset($_POST['submit'])) {
    // Formuliergegevens ophalen
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];
    
    // Het tweede product in de database bijwerken met de gegevens uit het formulier
    $query = "UPDATE products SET product_naam='$product_naam', prijs_per_stuk='$prijs_per_stuk', omschrijving='$omschrijving' WHERE id=2";
    
    // Query uitvoeren
    // Jouw code om de query uit te voeren en de database bij te werken komt hier
    
    // Feedback geven aan de gebruiker
    if ($success) {
        echo "Product succesvol bijgewerkt.";
    } else {
        echo "Fout bij het bijwerken van het product.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product bijwerken</title>
</head>
<body>
    <h1>Product bijwerken</h1>
    <form method="POST" action="">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" id="product_naam" required><br><br>
        
        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="text" name="prijs_per_stuk" id="prijs_per_stuk" required><br><br>
        
        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Bijwerken">
    </form>
</body>
</html>

