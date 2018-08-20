<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>while_if_example</title>
</head>
<body>
	<?php
	$input =  1;//Please enter your input here
	
	while ($input < 10){
		echo " Your input is $input less than 10 . </br> ";
	$input++;
		if ($input == 10){
			echo " Your input is $input equal to 10 . </br> ";
		}
	}
	?>
</body>
</html>