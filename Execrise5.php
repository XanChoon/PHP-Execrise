<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>while_example</title>
</head>
<body>
	<?php
	$input =  "Beef";//Please enter your input here
	
	switch ($input){
		case "Chicken":
			echo " You are order chicken Burger ";
			break;
		
		case "Fish":
			echo " You are order Fish Burger ";
			break;
		
		case "Beef":
			echo " You are order Beef Burger ";
			break;
		
	default:
		echo " Your order is invalid!!! ";
	}
	?>
</body>
</html>