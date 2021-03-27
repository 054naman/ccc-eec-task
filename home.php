<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<a class="float-right" href="logout.php"> LOGOUT </a>
<h1>welcome <?php echo $_SESSION['username']; ?></h1> 
</div>
</body>
</html>