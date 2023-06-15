<?php
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Connectie succesvol
echo "Connected to database ($db)";

// Gegevens ophalen uit de tabel producten
$stmt = $pdo->query("SELECT * FROM producten ORDER BY product_code");
$producten = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Producten</title>
</head>
<body>
    <h1>Producten</h1>

    <table>
        <tr>
            <th>Product Code</th>
            <th>Product Naam</th>
            <th>Prijs</th>
        </tr>
        <?php foreach ($producten as $product) : ?>
            <tr>
                <td><?php echo $product['product_code']; ?></td>
                <td><?php echo $product['product_naam']; ?></td>
                <td><?php echo $product['prijs']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="delete.php?product_code=2">Verwijder Product 2</a>
</body>
</html>
