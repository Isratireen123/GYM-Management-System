<!DOCTYPE html>
<html>
<head>
	<title>Daily Meal Plan for Gym-Goers</title>
</head>
<body>
	<form method="post">
		<label for="weight">Weight (in kg):</label>
		<input type="number" name="weight" required><br><br>

		<button type="submit" name="submit">Generate Meal Plan</button>
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$weight = $_POST['weight'];

			// Calculate macronutrient breakdown based on weight
			$protein = round($weight * 1.8); // 1.8 grams of protein per kg of body weight
			$carbs = round($weight * 4); // 4 grams of carbohydrates per kg of body weight
			$fat = round($weight * 0.9); // 0.9 grams of fat per kg of body weight

			// Generate meal plan based on macronutrient breakdown
			echo "<h2>Recommended Daily Meal Plan for Gym-Goers</h2>";
			echo "<ul>";
			echo "<li>Protein: $protein grams</li>";
			echo "<li>Carbohydrates: $carbs grams</li>";
			echo "<li>Fat: $fat grams</li>";
			echo "</ul>";
			echo "<p>Example meal plan:</p>";
			echo "<ul>";
			echo "<li>Breakfast: 2 scrambled eggs, 2 slices of whole wheat toast, and a banana</li>";
			echo "<li>Snack: Greek yogurt with mixed berries</li>";
			echo "<li>Lunch: Grilled chicken breast with quinoa and roasted vegetables</li>";
			echo "<li>Snack: Apple slices with almond butter</li>";
			echo "<li>Dinner: Baked salmon with sweet potato and steamed broccoli</li>";
			echo "<li>Snack: Cottage cheese with pineapple chunks</li>";
			echo "</ul>";
		}
	?>
</body>
</html>