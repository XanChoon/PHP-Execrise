<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP null example</title>
</head>
<body>
<?php
	$input = null; # Enter your input here
	if (empty($input)){
		echo (" Your input is blank ");
	}else{
		echo (" Your input is . $input ");
	}
?>
</body>
</html>