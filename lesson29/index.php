<?php 	
	session_start();
	setcookie("name", "Name", time()+3600*24*30, '/');
	require_once 'consts.php';


	$connection = @mysqli_connect(SERVER_DB, USERNAME_DB, PASSWORD_DB, DATA_DB) or die("Нет подключения с БД");//@-не выводит ошибки на экран
	if(!$connection) die("Соединение с MySql не установлено.".PHP_EOL."Код ошибки: ".mysqli_connect_errno().PHP_EOL."Текст ошибки: ".mysqli_connect_error().PHP_EOL);
	mysqli_set_charset($connection, 'utf8') or die('Не установлена кодировка');//Установка кодировки

	#Добавляет в базу данных
	//$queryInsert = "INSERT INTO gb (`Name`, `Text`) VALUES('Люда', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit')";
	//$resInsert = mysqli_query($connection, $queryInsert);

	#Изменяет в базе данных
	// $queryUpdate = "UPDATE gb SET text = CONCAT(text, '***') WHERE id = 7";
	// $resUpdate  = mysqli_query($connection, $queryUpdate);

	#Удаляет в базе данных
	// $queryDelete = "DELETE FROM gb WHERE id > 7";
	// $resDelete  = mysqli_query($connection, $queryDelete) /*or die(mysqli_error($connection))*/;
	// echo mysqli_affected_rows($connection);#Выводит количествоизмененных строк в базе данных

	#Делает выборку в базе данных
	$querySelect = "SELECT * FROM gb";
	$resSelect = mysqli_query($connection, $querySelect);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>