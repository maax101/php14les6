<?php
var_dump($_POST);
if (isset ($_FILES['test']['name']) ){
	$file = $_FILES['test']['name'];
	
	//$temp1 = json_decode($temp);
	//var_dump($temp1);

echo '<br><form action="test.php" method="GET">
	<br>Загружено:'.$file.' 
	<input type=hidden name="test" value="'.$file.'">
			
	<input type="submit"   value="go" >
	</form>';	
}else {
	echo 'Тест не загружен! ';
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><a href="admin.php">Админка</a></p>
			

	
</body>
</html>


<!-- //echo "<a href="$a">";
//$test = $_GET['use'] -> $t=json_decode( file_get_contents($test));
	//echo $t;



// $test=$_GET['use'];
// if (!$test){
// 	echo 'Тест не выбран';
// 	echo '<form action="admin.php" method="GET">
// 	<br><input type="submit" value="Вернуться">';
// }else{
// 	$t=json_decode( file_get_contents($test));
// 	echo $t;
	
// } -->
