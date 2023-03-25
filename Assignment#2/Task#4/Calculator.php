<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="post">
		<input type="number" name="num1" placeholder="Enter first number" required>
		<select name="operator">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		<input type="number" name="num2" placeholder="Enter second number" required>
		<input type="submit" value="Calculate">
	</form>
	<?php
		if(isset($_POST['operator'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch($operator) {
				case 'add':
					$result = $num1 + $num2;
					echo "<h3>$num1 + $num2 = $result</h3>";
					break;
				case 'sub':
					$result = $num1 - $num2;
					echo "<h3>$num1 - $num2 = $result</h3>";
					break;
				case 'mul':
					$result = $num1 * $num2;
					echo "<h3>$num1 * $num2 = $result</h3>";
					break;
				case 'div':
					if($num2 == 0) {
						echo "<h3>Division by zero error</h3>";
					} else {
						$result = $num1 / $num2;
						echo "<h3>$num1 / $num2 = $result</h3>";
					}
					break;
				default:
					echo "<h3>Invalid operator selected</h3>";
			}
		}
	?>
</body>
</html>
