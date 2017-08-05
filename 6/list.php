<?php
$test_list=['math.json'=>'математика',];

// if (!isset($_FILES['load_test']['name'])) {
// 	echo 'Нет загруженых тестов';
// 	exit();
// } else {
// 	$test = $_FILES['load_test']['name'];
// 	move_uploaded_file($_FILES['load_test']['tmp_name'], 'tests/'.$test);
// 	echo 'загружен: '.$test_list[$test];
// }
// if (pathinfo($test,PATHINFO_EXTENSION)!='json') {
// 	echo 'Выбрано неверное расширение файла';
// 	exit();
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Загруженые тесты</title>
</head>
<body>
	<p><h2>Список тестов:</h2></p>
<?php 	if (!isset($_FILES['load_test']['name'])) {
	echo 'Нет загруженых тестов';
	exit();
	} else {
	$test = $_FILES['load_test']['name'];
	move_uploaded_file($_FILES['load_test']['tmp_name'], 'tests/'.$test);
	}	
	if (pathinfo($test,PATHINFO_EXTENSION)!='json') {
	echo 'Выбрано неверное расширение файла';
	exit();
	}
	foreach ($test_list as $json => $name) {
	echo '<li>'.$name.'</li><br>
	<form action="test.php" method="GET">
		<input type="hidden" name="test_name" value="'.$test.'">
		<input type="submit" value="пройти тест">
	</form>';
	}
?>
<br><a href="admin.php">Администрация</a><br/>
</body>
</html>