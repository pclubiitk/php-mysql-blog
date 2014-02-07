<html>

<head>
<title>Poster</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="wrap">
		<form action="insert.php" name="postForm" method="post">
				<textarea name="post" id="post" rows="2" cols="60"></textarea>
			<input type="submit" value="POST">
		</form>
		<div id="display"><?php include 'display.php'; ?></div>

	</div>

</body>

</html>
