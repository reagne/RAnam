<?php

$x = 5;
$y = 10;

// WHILE

$sum = 0;
$i = $x;
echo("Uzycie WHILE<br>");
while ($i <= $y){
	$sum = $sum + $i;
	$i = $i + 1;
}
echo("Suma liczb z przedzialu wynosi $sum<br><br>");

// FOR

$sum = 0;  // trzeba wyzerować ponownie zmienną
echo("Uzycie FOR<br>");
for ($i = $x; $i <= $y; $i = $i + 1){
	$sum = $sum + $i;
}
echo("Suma liczb z przedzialu wynosi $sum<br><br>");

?>