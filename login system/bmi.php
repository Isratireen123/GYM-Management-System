<!DOCTYPE html>
<html>
<head>
	<title>BMI Calculator</title>
</head>
<body>
	<h1>BMI Calculator</h1>
	<form method="post">
		<label for="height">Height (in cm):</label>
		<input type="number" name="height" id="height" required><br><br>
		<label for="weight">Weight (in kg):</label>
		<input type="number" name="weight" id="weight" required><br><br>
		<button type="submit" name="calculate">Calculate BMI</button>
	</form>

	<?php
		if(isset($_POST['calculate'])) {
			$height = $_POST['height'] / 100; // convert height from cm to m
			$weight = $_POST['weight'];
			$bmi = $weight / ($height * $height);
			echo "<p>Your BMI is: " . round($bmi, 2) . "</p>";
		}
	?>
</body>
</html>
