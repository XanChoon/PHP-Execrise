<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if...elseif....else</title>
</head>
<body>
	<?php
	$a =  50;//please enter your input here
	if ($a>=0 &&  $a<=49){
		echo " Your input results: Failed ";
	}elseif ($a>=50 &&  $a<=100){
		echo " Your input results: Passed ";
	}else{
		echo "Your input not in range";
	}
	?>
</body>
</html>