<?php

$n = 5;

// BEZ FUNKCJI
echo('<table border=1px color=black>');
for($i = 1; $i <= $n; $i++){
	echo('<tr>');                              // wiersze
	for($j = 1; $j <= $n; $j++){
		echo('<td>');                          // kolumny
		$mnozenie = $i * $j;
		echo("$i x $j = $mnozenie</td>");
	}
	echo('</tr>');
}
echo('</table><br><br>');

// Z FUNKCJĄ                                  // nie za bardzo widzę tutaj sens użycia funkcji, chyba że trzeba to inaczej rozwiązać
function Mnozenie($n){
	echo('<table border=1px color=black>');
    for($i = 1; $i <= $n; $i++){
	    echo('<tr>');                              
	    for($j = 1; $j <= $n; $j++){
		    echo('<td>');                          
		    $mnozenie = $i * $j;
		    echo("$i x $j = $mnozenie");
			echo('</td>');
	    }
	    echo('</tr>');
    }
    echo('</table>');
}

Mnozenie($n);
?>