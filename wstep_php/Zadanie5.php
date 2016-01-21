<?php

$points = 39;

if($points < 0){
	echo("Bledna punktacja");
}
elseif($points < 40){
	echo("Ocena niedostateczna");
}
elseif($points < 55){
	echo("Ocena dopuszczajaca");
}
elseif($points < 70){
	echo("Ocena dostateczna");
}
elseif($points < 85){
	echo("Ocena dobra");
}
elseif($points < 99){
	echo("Ocena bardzo dobra");
}
elseif($points <= 100){
	echo("Ocena celujaca");
}
else{
	echo("Bledna punktacja");
}
?>