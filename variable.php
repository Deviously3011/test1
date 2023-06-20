<?php
// Start the session
session_start();

// Store the ID values directly in the session
$_SESSION['ids'] = array();

// Database connection details
$hostname = "localhost:3307";
$username = "root";
$password = "";
$database = "winkel";

// Create the database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the table
$query = "SELECT * FROM producten";
$result = $conn->query($query);

// Check if there are results
if ($result->num_rows > 0) {
    // Output the data
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["product_id"] . "<br>";
        echo "Name: " . $row["product_naam"] . "<br>";
        echo "pps: " . $row["prijs_per_stuk"] . "<br>";

        // Store the ID in the session
        $_SESSION['ids'][] = $row["product_id"];

        echo "<br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>
