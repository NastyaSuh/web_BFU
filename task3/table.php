<?php
/** @var string $email */
/** @var string $title */
/** @var string $category */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>advertisement table</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Email</th>
		<th>Title</th>
		<th>Category</th>
	</tr>
	<tr>
		<td><?= $email ?></td>
		<td><?= $title ?></td>
		<td><?= $category ?></td>
	</tr>
</table>
</body>
</html>