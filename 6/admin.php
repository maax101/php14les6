<?php


//$test1 =file_put_contents('test1.json', (json_encode(file_get_contents('tests.php'))));

// $test2 = file_put_contents('test2.json', (json_encode(file_get_contents('tests1.php'))));
// var_dump($test2);
// $test3 = file_put_contents('test3.json', (json_encode(file_get_contents('tests2.php'))));
// var_dump($test3);
// $test4 = file_put_contents('test4.json', (json_encode(file_get_contents('tests3.php'))));
// var_dump($test4);*/
// //echo var_dump($file['tmp_name']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="list.php" enctype="multipart/form-data" method="POST">
	<p>Выберите файл для загрузки:</p>
	<input type="file" name="test" ><br>		
	<input type="submit" value="Загрузить"><br>
</form>
	<p><a href="list.php">Список тестов</a></p>
	<p><a href="allresult.php">Просмотр результатов</a></p>

</body>
</html>
<?php
var_dump($_FILES);	
if (isset ($_FILES['test']['name']) ) {
	$file = $_FILES['test']['name'];
	$path_file = 'tests/'.$file;
	if (move_uploaded_file($_FILES['test']['tmp_name'], 	$path_file)) {
	echo '<br>файл загружен.<br>';
	
		} else {
		echo 'файл не загружен!';
		}
	
}
 move_uploaded_file($file, $path_file);
 ?>

		

	<!-- <form action="list.php" enctype="multipart/form-data" method="POST">
		<p>Kind of Tests</p>
		<input type="checkbox" name="test1" value="1">1
		<input type="checkbox" name="test1" value="2">2
		<input type="checkbox" name="test1" value="3">3
		<input type="checkbox" name="test1" value="4">4
		<input type="submit" value="upload">	
	</form> -->


