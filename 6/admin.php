<!DOCTYPE html>
<html>
<head>
	<title>Администрация</title>
</head>
<body>
	<menu type="toolbar">
		<li><a href="list.php">Список тестов</a></li><br>
		<li><a href="allresult.php">Результаты</a></li><br>
	</menu>
		<form enctype="multipart/form-data" action="list.php" method="POST">
			<input type="file" name="load_test"><br>
			<br>
			<input type="submit" value="загрузить"><br>
		</form>	
</body>
</html>