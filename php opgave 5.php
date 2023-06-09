<?php

$tijd = date("H:i"); // Haal de huidige tijd op (in 24-uursnotatie)

if ($tijd < "12:00") {
    echo "Goedemorgen<br>";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag<br>";
} else {
    echo "Goedenavond<br>";
}
/**
 * Summary of Gemiddelde
 * @param mixed $getal1
 * @param mixed $getal2
 * @return void
 */
function Gemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

Gemiddelde(4, 7); //  het gemiddelde van 4 en 7
?>