<h1>Ueberschrift</h1>
<div>
<?php

 $word = "Hallo Welt" . " Ende";
 echo $word;

?>
<br />
<br />
<?php
 $a = 5;
 $b = 12;

 $c = $a + $b;

 echo "Das Ergebnis ist:" . $c . "<br>";
 echo "Das war sehr einfach." . "Ende" . "<br>";


 echo strlen($word) . "<br>";

/**
 * Funktion ohne Parameter
 */
 function printWord()
{
     $wording = "Hallo Wording-Text" . "<br>";
     echo $wording;
     } 

printWord();
 printWord();

/**
 * Funktion mit Parameter
 */
 function printWelt($welt, $welt2)
{
     echo "Hallo: " . $welt . ":" . strlen($welt2);
     } 

printWelt("Nasenbär", "Schnabeltier");

 echo "<br>";

/**
 * Funktion mit Rückgabewert
 */
 function summe($a, $b)
{
     $c = $a + $b;
     return $c;
     } 

$sum = summe(10, 15);
 echo $sum;
 echo summe(100, 100);

 echo "<br>";

/**
 * If Funktion
 */
 $wert1 = 21;
 if ($wert1 < 20) {
    echo "Die Variable ist kleiner als 20" ;
} 
else {
    if ($wert1 == 20) {
        echo "Die Variable ist genau 20";
         } 
    else {
        echo "Die Variable ist größer  20";
         } 
    } 

echo "<br>";



/**
 * BOOLS
 */

 $wert2 = true;
 $wert3 = 5;
 $wert4 = false;
 $wert5 = "Hallo";
 $wert6 = 12 < 15;

 echo $wert2;

 echo "<br>";
 var_dump($wert2);
 echo "<br>";
 var_dump($wert3);
 echo "<br>";
 var_dump($wert4);
 echo "<br>";
 var_dump($wert5);
 echo "<br>";
 var_dump($wert6);


 echo "<br>";
 echo "<br>";

/**
 * Taschenrechner
 */

 function multiplizieren($faktor1, $faktor2)
{
     $produkt = $faktor1 * $faktor2;
     return $produkt;
     } 

mul

$rechner = multiplizieren(3, 5);
 echo "Hallo Ella," . "<br><br>" . "Das Ergebnis ist: " . $rechner;


 echo "<br>";
 echo "<br>";

/**
 * Empty Funktion
 */

 $wert10 = "";

 if (empty($wert10)) {
    echo "Die Varibale ist leer";
     } 
else {
    echo "Die Varibale ist nicht leer";
     } 


$wert11 = "Hallo Berlin";

 if (empty($wert11) == false) {
    echo "Die Varibale ist nicht leer";
     } 
else {
    echo "Die Varibale ist  leer";
     } 

if (!empty($wert11)) {
    echo "Die Varibale ist nicht leer";
     } 
else {
    echo "Die Varibale ist  leer";
     } 


echo "<br>";
 echo "<br>";

/**
 * For Schleifen Funktion
 */

 for ($x = 0; $x < 10; $x++) {
    echo $x . ". Durchlauf" . "<br>" ;
     } 




echo "<br>";
 echo "<br>";

/**
 * While Do Schleifen Funktion
 */

 $y = 1024;
 $z = 0;

 while ($y % 2 == 0) {
    $y = $y / 2;
     $z++;
     echo "Ergebnis:" . $y . " Anzahl Teiler:" . $z . "<br>" ;
     } 

?>
</div>