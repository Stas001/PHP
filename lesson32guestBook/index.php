<?php
#1-
	require_once 'consts.php';
	$connect = @mysqli_connect(SERVER_DB, USER_DB, PASSWORD_DB, NAME_DB) or die('Нет подключения к базе данных');
	if(!$connect) die('Нет подключения к MySql'.PHP_EOL.'Текст ошибки: '.mysqli_connect_error().PHP_EOL);
	mysqli_set_charset($connect, 'utf8');
#2-
	if(!empty($_POST['name']) || !empty($_POST['text'])){
		$name = mysqli_real_escape_string($connect, $_POST['name']);
		$text = mysqli_real_escape_string($connect, $_POST['text']);
		$queryInsert = "INSERT INTO gb (Name, Text) VALUES ('{$name}', '{$text}')";
		$resInsert = mysqli_query($connect, $queryInsert);
		header("Location: {$_SERVER['PHP_SELF']}");
	}
#3-
	$querySelect = "SELECT Name, Text, Date FROM gb ORDER BY id DESC";
	$resSelect = mysqli_query($connect, $querySelect);
	$data = mysqli_fetch_all($resSelect, MYSQLI_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="boot">
		<form action="" method="post">
			<div class="form-group">
			    <label for="exampleFormControlInput1">Введите имя</label>
			    <input type="type" class="form-control" id="exampleFormControlInput1" name="name">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Введите сообщение</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
			</div>
			<input class="btn btn-primary" type="submit" value="Submit">
		</form>
	</div>
	<hr>
	<div class="block">
		<?php foreach ($data as $item): ?>
			<div class="mes">
				<p><?php echo "Имя: " . $item['Name'] . " | " . "Дата: " . $item['Date'] ?></p>
				<div class="text_mes">
					<?php echo $item['Text'] ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	
	
</body>
</html>
<style>
	.boot{
		padding: 40px;
	}
	.mes{
		border: 1px solid #ccc;
		background-color: pink;
		padding: 10px;
		margin-bottom: 8px;
	}
	.block{
		padding-left: 20px;
		padding-right: 20px;
	}
</style>