<?php
// Start de sessie
session_start();

// Definieer de variabelen en geef ze waarden
$naam = "John Doe";
$email = "johndoe@example.com";

// Sla de variabelen op in de sessie
$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;
?>
