<?php
require_once 'config.php';
require_once 'database_functions.php';
require_once 'helpers_functions.php';

$dbConnection = connectToDatabase();
$messageBoardCategories = getCategory($dbConnection);
$messageBoardItems = getItems($dbConnection);

$config = [
	'tableHeaders' => [
		'email' => 'Электронная почта',
		'category' => 'Категория объявления',
		'title' => 'Заголовок объявления',
		'description' => 'Текст объявления'
	]
];

?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Доска объявлений</title>
</head>
<body>

<style>

	form {
		display: table-caption;
		font-family: 'Roboto', sans-serif;
		padding: 10px;
	}

	caption {
		margin-bottom: 10px;
	}

	table, td {
		margin-top: 20px;
		border: 0.75px solid black;
		padding: 3px;
		font-family: 'Roboto', sans-serif;
		text-align: center;
	}

</style>

<form action="lab5.php" method="post" >
	<label for="email">Email
		<input type="email" name="email">
	</label>
	<label for="message-category">
		<select name="message-category">
			<?php foreach ($messageBoardCategories as $categoryName):?>
				<option value="<?= htmlspecialchars($categoryName)?>"><?= htmlspecialchars($categoryName)?></option>
			<?php endforeach;?>
		</select>
	</label>
	<label for="message-title">Заголовок
		<input type="text" name="message-title">
	</label>
	<label for="message-text">Текст
		<textarea name="message-text" cols="30" rows="10"></textarea>
	</label>
	<input type="submit" value="Добавить объявление">
</form>

<table>
	<caption>Объявления</caption>
	<tr>
		<?php foreach ($config['tableHeaders'] as $columnName):?>
			<td><?= htmlspecialchars($columnName)?></td>
		<?php endforeach;?>
	</tr>
	<?php foreach ($messageBoardItems as $row):?>
		<tr>
			<?php foreach ($row as $value):?>
				<td><?= htmlspecialchars($value)?></td>
			<?php endforeach;?>
		</tr>
	<?php endforeach;?>
</table>

</body>
</html>


