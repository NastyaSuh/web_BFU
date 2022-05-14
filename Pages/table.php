<?php
use Connection\Config;
use Getting\CategoriesFromDatabase;
use Getting\ItemsFromDatabase;
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title>Доска объявлений</title>
</head>
<body>

<form action="lab8.php" method="post" >
	<label for="email">Email
		<input type="email" name="email">
	</label>
	<label for="message-category">
		<select name="message-category">
			<?php foreach (CategoriesFromDatabase::getCategory() as $categoryName):?>
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
		<?php foreach (Config::getTableHeader() as $columnName):?>
			<td><?= htmlspecialchars($columnName)?></td>
		<?php endforeach;?>
	</tr>
	<?php foreach (ItemsFromDatabase::getItems() as $row):?>
		<tr>
			<?php foreach ($row as $value):?>
				<td><?= htmlspecialchars($value)?></td>
			<?php endforeach;?>
		</tr>
	<?php endforeach;?>
</table>

</body>
</html>

