
<!DOCTYPE html>
<html>
<head>
	<title>Latihan No.1 PHP Dasar</title>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<div>
			<label for="bil1">Bilangan 1 = </label>
			<input type="number" name="bil1" id="bil1" value="<?= $x ?>">
		</div>

		<div>
			<label for="bil2">Bilangan 2 = </label>
			<input type="number" name="bil2" id="bil2" value="<?= $y ?>">
		</div><br>

		<div>
			<input type="submit" value="+" name="operator">
			<input type="submit" value="-" name="operator">
			<input type="submit" value="*" name="operator">
			<input type="submit" value="/" name="operator">
			<input type="submit" value="%" name="operator">
		</div>
	</form>

</body>
</html>

<?php 
	echo "<br>";
	if (isset($_POST['operator'])) {
		$x = $_POST['bil1'];
		$y = $_POST['bil2'];
		$op = $_POST['operator'];

		switch ($op) {
			case '+':
				$result = $x + $y;
				echo "PENJUMLAHAN<br>";
				echo "Operator : +<br>";
				echo "Hasil : "."$result";
				break;
			case '-':
				$result = $x - $y;
				echo "PENGURANGAN<br>";
				echo "Operator : -<br>";
				echo "Hasil : "."$result";
				break;
			case '*':
				$result = $x * $y;
				echo "PERKALIAN<br>";
				echo "Operator : *<br>";
				echo "Hasil : "."$result";
				break;
			case '/':
				$result = $x / $y;
				echo "PEMBAGIAN<br>";
				echo "Operator : /<br>";
				echo "Hasil : "."$result";
				break;
			case '%':
				$result = $x % $y;
				echo "MODULUS<br>";
				echo "Operator : %<br>";
				echo "Hasil : "."$result";
				break;
		}
	}

?>