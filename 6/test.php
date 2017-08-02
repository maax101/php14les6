<?php
var_dump($_GET);
if (isset ($_GET['test'])) {
	$test = $_GET['test'];
	$path = 'tests/'.$test;
	$json= file_get_contents($path);
	$php= json_encode($json);
	echo $php;
} else {
	echo 'тест не загружен!';
}


?>


