<?php
session_start();
// print_r($_SESSION); // view all session variable in array
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
if (isset($_SESSION["favcolor"]))
{
    echo "Favorite Color :" . $_SESSION["favcolor"];
}
?>
</body>
</html>
