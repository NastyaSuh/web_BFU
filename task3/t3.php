<?php
/** @var string $email */
/** @var string $title */
/** @var string $category */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task3</title>
</head>
<body>

<form action="index_task3.php" method="post">
	<label>
			Enter title:
			<br>
			<input name="title" required>
		<br> <br>
			Enter your email:
			<br>
			<input name="email" required>
		<br> <br>
			Enter ad text:
			<br>
			<input name="text" required>
	</label>
	<br> <br>
	<label for="category">Choose a category:</label>
	<br>
	<select name="category" id="category" required>
		<option value="Sport">Sport</option>
		<option value="Auto">Auto</option>
		<option value="House">House-holding</option>
		<option value="Uni">Uni and school stuff</option>
	</select>
	<br> <br>
	<button>Submit</button>
</form>

<div class="content">
	<?= renderTemplate('table.php', [
		'email' => $email,
		'title' => $title,
		'category' => $category
	]);
	?>
</div>

</body>
</html>