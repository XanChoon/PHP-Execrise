<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for_example</title>
</head>
<body>
	<?php
	$input = "F";//Please enter your input here
	
	if ($input == "Saturday" || $input == "Sunday"){
		echo ("At home");
	}elseif ($input == "Monday" || $input == "Tuesday" || $input == "Wednesday" || $input == "Thursday"
		|| $input == "Friday"){
		echo "Today is $input";
	}else {
		echo "Your input is : $input. This is invalid Input.";
	}
	?>
</body>
</html>