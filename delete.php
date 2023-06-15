<?php
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Databaseverbinding
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Databaseverbinding mislukt: " . $e->getMessage());
}

// Product verwijderen
if (isset($_GET['product_code'])) {
    $productCode = $_GET['product_code'];
    $stmt = $pdo->prepare("DELETE FROM producten WHERE product_code = ?");
    $stmt->execute([$productCode]);

    echo "Product met product code $productCode is verwijderd.";
}
?>
