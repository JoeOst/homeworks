<form action="" method="post">
	Введите уравнение: <input type="number" name="a" id="a"><label for="a"> x<sup>2</sup> + </label>
	<input type="number" name="b" id="b"><label for="b"> x + </label>
	<input type="number" name="c" id="c"><label for="c"></label> = 0
	<input type="submit" name="submit" value="Solve">
</form>
<?php
	if ($_POST["submit"] == "Solve") {
		echo solveQuadraticEquation();
	}

	function solveQuadraticEquation() {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		
		if ($a!=="" && $b!=="" && $c!=="") {
			if ($a == 0) {
				return("Это не квадратное уравнение, коэффициент <b>а</b> не должен равняться нулю");
			
			} else {
				$D = (pow($b,2)) - (4*$a*$c);
			

			if ($D >= 0) {
				$x1 = ((-$b) + bcsqrt($D,1))/(2*$a);
				$x2 = ((-$b) - bcsqrt($D,1))/(2*$a);

				return("Корни уравнения: x<sub>1</sub> = {$x1} <br> x<sub>2</sub> = {$x2}");
			} else {
				$answer = "Уравнение не имеет действительных корней";
				$i /*= sqrt(-1)*/;
				//$x1 = ((-$b) + i*sqrt($D))/(2*$a);
				//$x2 = ((-$b) - i*sqrt($D))/(2*$a);
				$f = (-$b)/(2*$a);
				$s = bcsqrt(abs($D),1)/(2*$a);
				$x1 = "{$f} + i*{$s}";
				$x2 = "{$f} - i*{$s}";


				return("{$answer} <br> Комплексные корни: x<sub>1</sub> = {$x1} <br> x<sub>2</sub> = {$x2}");
			}
			}
		
		} else {
			return("Ошибка. Введите все коэффициенты уравнения");
		}
		
	}
?>