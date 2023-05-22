<?php
//deel 1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

// a) Voeg een waarde toe zonder de regel zoals die hierboven is gegeven aan te passen.
$myArray[] = 'motor';

// b) Druk alle waarden van het array af.
foreach ($myArray as $value) {
  echo $value . "\n";
}


// Deel2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
echo "1. Het array heeft " . count($myArray) . " elementen.\n";

// Voeg een element toe aan het array
$myArray[] = 'boot';

// Druk het aantal elementen van het array af
echo "1. Het array heeft " . count($myArray) . " elementen.\n";


// Deel3
$array = array("foo", "bar", "hello", "world");
echo $array[1]; // Regel 2, output: bar

$array = array(1,2,3,4,5);
echo $array[3]; // Regel 5, output: 4

$cars = array("Volvo", "BMW", "Toyota");
echo $array[2]; // Regel 8, output: 3

echo count($cars); // Regel 9, output: 3

$array = [5, 4, 3, 2, 1];
echo $array[0]; // Regel 12, output: 5

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
echo $numbers[count($numbers)-1]; // Regel 19, output: five
    

// Deel4A
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);
echo "Gemiddelde is: " . $gemiddelde;

// Deel 4B

//Ik denk dat het beter is
//om de regels samen te voegen, omdat het de code beknopter
//en leesbaarder maakt. Door de regels samen te voegen, 
//kunnen we het gemiddelde direct berekenen en afronden met één commando. 
//Dit maakt de code efficiënter en vermijdt het gebruik van
 //een extra variabele voor het aantal cijfers.
 // Het resultaat is een vereenvoudigde en meer geoptimaliseerde code.


?>



