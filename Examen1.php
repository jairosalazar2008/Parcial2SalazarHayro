<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$cars = [
    "Camaro" => 22000,
    "Civic" => 24000,
    "Mustang" => 30000,
    "Silverado" => 35000,
    "Tesla" => 40000,
    "Altima" => 24000,
    "BMW 6x" => 45000
];


asort($cars);

print_r($cars);
?>
</body>
</html>