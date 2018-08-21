<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP_Foreach_Example</title>
</head>
<body>
	<?php
	$car = array("Proton", "Honda", "Toyota", "BMW");
	foreach ($car as $value){
		echo "$value </br>";
	}
	?>
</body>
</html>