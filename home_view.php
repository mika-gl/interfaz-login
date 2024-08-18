<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset='utf-8'>
		<link rel='stylesheet' href='./standard.css'>
	</head>
	<body>
		<h1 class='title'>Home</h1>
		<div class='form'>
			<?= "Logged in as {$_SESSION['username']}" ?>
			<p><a href="logout.php">logout</a></p>
		</div>
	</body>
</html>
