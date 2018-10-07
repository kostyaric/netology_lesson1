<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Обо мне</title>
	<meta charset="utf-8">
</head>

<?php 
$name	= 'Константин';
$age	= 44;
$email	= 'konstantin@netology.ru';
$city	= 'Zlatoust';
$about	= 'Начинающий веб разработчик';
?>

	<body>
		<h1>Страница пользователя <?php echo $name ?></h1>
		<h2>Имя</h2>
		<p><?php echo $name; ?></p>
		<h2>Возраст</h2>
		<p><?php echo $age; ?></p>
		<h2>Адрес электронной почты</h2>
		<p><?php echo $email; ?></p>
		<h2>Город</h2>
		<p><?php echo $city; ?></p>
		<h2>О себе</h2>
		<p><?php echo $about; ?></p>
	</body>
	
</html>