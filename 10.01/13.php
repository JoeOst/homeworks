<form action="" method="post">
	Введите длину сторон треугольника: <input type="number" name="a">
	<input type="number" name="b">
	<input type="number" name="c">
	<input type="submit" name="submit" value="Проверка">
</form>
<?php 
	if ($_POST["submit"] == "Проверка") {
		echo isTriangle();
	}

	function isTriangle() {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];

		if ($a+$b>$c && $a+$c>$b && $b+$c>$a) {
			return("Треугольник существует.");
		} else {
			return("Треугольник не существует.");
		}
	}
?>