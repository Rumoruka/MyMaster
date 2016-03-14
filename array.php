<?php

$array = [];
$y = 0;
for ($i = 1; $i <= 100; $i++){
	$array[$y] = $i;
	$y++;
}

foreach ($array as $key => $value){
	if ($value % 3 == 0 && $value % 12 != 0){
		echo $value . "   ";
	}
}

echo "<br />";
