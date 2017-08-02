<?php
$ot = 0;
$not = 0;
var_dump($_GET);
if (!isset ($_GET['name'])) {
	echo 'Вы не ввели имя. Вернитесь назад.<br> '.PHP_EOL;
	exit();
}
elseif (!isset ($_GET['q1']) || !isset($_GET['q2']) || !isset($_GET['q3'])) {
	echo 'Не все варианты выбраны. Вернитесь назад.<br> '.PHP_EOL;

	;
exit();
}else{
	if ($_GET['q1']=='b') {
		$ot++;
	} else {
		$not++;
	}
	if ($_GET['q2']=='a') {
		$ot++;
	} else {
		$not++;
	}
	if ($_GET['q3']=='c') {
		$ot++;
	} else {
		$not++;
	}
}

file_put_contents('allresult.php', '<br>NAME: правильно - '.$ot.', не правильно - '.$not.'<br>', FILE_APPEND);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Результаты</title>
</head>
<body>
<p>правильно: <?=$ot?></p>
<p>не правильно: <?=$not?></p>
<form action="list.php">

	<br><input type="submit" name="back" value="к списку">
</body>

</html>