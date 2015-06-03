<html>
	<?php require "connect.php" ?>
	<head>
	</head>
	<body>
		<?php

			$roll = $_POST["roll"];
			$name = $_POST["name"];
			$age = $_POST["age"];
			$city = $_POST["city"];
			$gender = $_POST["gender"];
			
			$query = "INSERT INTO task2 (roll, name, age, city, gender) VALUES ('$roll', '$name', '$age', '$city', '$gender')";
			$result = mysqli_query($con, $query);
			if($result > 0)
				echo "Successfully added to database!";
			else
				echo "Error adding to database!";

			echo "Your roll no: " . $roll . "<br>";
			echo "Your name: " . $name . "<br>";
			echo "Your age: " . $age . "<br>";
			echo "Your City: " . $city ."<br>";
			echo "Your Gender: " .$gender . "<br>";

		?>
	</body>
</html>