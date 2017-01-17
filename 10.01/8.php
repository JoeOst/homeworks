<form action="" method="post">
	Введите длину катетов: <input type="number" name="a" id="a">
	<input type="number" name="b" id="b">
	<input type="submit" name="submit" value="Найти гипотенузу">
</form>
<?php 
	if ($_POST["submit"] == "Найти гипотенузу") {
		echo findHypotenuse();
	}

	function findHypotenuse() {
		$a = $_POST["a"];
		$b = $_POST["b"];

		if (empty($a && $b) || $a <= 0 && $b <= 0) {
			return("Ошибка. Заполните все поля. Длина не может быть отрицательной или нулевой.");
		} else {
			$c = bcsqrt(pow($a,2) + pow($b,2),1);
			return("Гипотенуза равна $c");
		}
	}
?>