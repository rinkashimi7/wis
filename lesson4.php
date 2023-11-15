<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Variable Types</title>
</head>
<body>
<?php
//integers 
    $int_var = 12345;
    $another_int = -12345 + 12345;

//doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print("$many + $many_2 = $few<br>");

//boolean
if (TRUE)
 print("This will always print<br>");
else
 print("This will never print<br>");
?>
</body>
</html>