<?php 
$batas = 50;

echo "Bilangan prima dari 1-50 adalah: ";
for ($i=1; $i <= $batas ; $i++) { 
	$faktor = 0;
	for ($p=1; $p <= $i ; $p++) { 
		if ($i % $p == 0) {
			$faktor++;
		}
	}
	if ($faktor == 2) {
		echo "$i, ";
	}

}
 ?>