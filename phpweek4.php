<?php
// Opdracht 1
echo "Opdracht 1:\n";
for ($i = 0; $i <= 50; $i++) {
    echo $i . "\n";
}

// Opdracht 2
echo "\nOpdracht 2:\n";
$klasgenoten = [
    "Naam 1",
    "Naam 2",
    "Naam 3",
    "Naam 4",
    "Naam 5",
    "Naam 6",
    "Naam 7",
    "Naam 8",
    "Naam 9",
    "Naam 10"
];

foreach ($klasgenoten as $naam) {
    echo $naam . "\n";
}

// Opdracht 3
echo "\nOpdracht 3:\n";
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$aantalMaanden = count($maanden);

for ($i = 0; $i < $aantalMaanden; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . ".\n";
}

// Opdracht 4
echo "\nOpdracht 4:\n";
foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . ".\n";
}
?>
