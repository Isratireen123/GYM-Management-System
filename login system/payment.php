<!DOCTYPE html>
<html>
<head>
	<title>Online Payment for Gym Membership</title>
</head>
<body>
	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>

		<label for="membership_type">Membership Type:</label>
		<select name="membership_type" required>
			<option value="">-- Select Membership Type --</option>
			<option value="Basic">Basic</option>
			<option value="Premium">Premium</option>
			<option value="Ultimate">Ultimate</option>
		</select><br><br>

		<label for="card_number">Card Number:</label>
		<input type="text" name="card_number" required><br><br>

		<label for="expiration_date">Expiration Date:</label>
		<input type="text" name="expiration_date" placeholder="MM/YY" required><br><br>

		<label for="cvv">CVV:</label>
		<input type="text" name="cvv" required><br><br>

		<button type="submit" name="submit">Submit Payment</button>
	</form>

	<?php
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$membership_type = $_POST['membership_type'];
			$card_number = $_POST['card_number'];
			$expiration_date = $_POST['expiration_date'];
			$cvv = $_POST['cvv'];

			// TODO: Implement payment processing code here
			// This could involve connecting to a payment gateway or processing API

			echo "<p>Thank you, $name, for your payment of $membership_type membership!</p>";
			echo "<p>Your card ending in " . substr($card_number, -4) . " has been charged.</p>";
		}
	?>
</body>
</html>
