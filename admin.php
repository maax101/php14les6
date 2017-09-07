<?php
if (!empty($_FILES['load_test']['name'])){
    if (isset ($_FILES['load_test']['name'])) {        
        $test = $_FILES['load_test']['name'];
    }
    if (file_exists($_FILES['load_test']['tmp_name'])) {
        move_uploaded_file($_FILES['load_test']['tmp_name'], 'tests/' . $test);
    }
    if (file_exists('tests/' . $test)) {
        echo "Файл загружен";
    } else {
        echo "Файл НЕ загружен!";       
    } 
    if (isset($test)) {
        $extension = pathinfo($test, PATHINFO_EXTENSION);
        if ($extension != 'json') {
            echo '<p><h3>Выбрано неверное расширение файла!!!</h3></p>';
        }
    }
}  
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Администрация</title>
</head>
<body>
<menu type="toolbar">
    <li><a href="list.php">Список тестов</a></li>
    <br>
    <li><a href="allresult.php">Результаты</a></li>
    <br>
</menu>
<h4>Выберите файл *.json для загрузки:</h4>
<form enctype="multipart/form-data" action="" method="POST">
    <input type="file" name="load_test" extensions="json"><br>
    <br>
    <input type="submit" value="загрузить"><br>
</form>
</body>
</html>
