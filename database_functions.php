<?php
require_once 'config.php';
require_once 'helpers_functions.php';

function connectToDatabase(): mysqli
{
	$database = new mysqli(
		'localhost',
		'nastya',
		'nastya',
		'web'
	);
	if (mysqli_connect_errno()) {
		echo mysqli_connect_errno() . ": " . mysqli_connect_error();
	}
	return $database;
}

function addItem(mysqli $databaseSettings, array $params): void
{
	$query = "
	INSERT INTO web.ad (TITLE, DESCRIPTION, CATEGORY, EMAIL)
	VALUES (?, ?, ?, ?)
	";

	$preparedStatement = mysqli_prepare($databaseSettings, $query);
	mysqli_stmt_bind_param($preparedStatement, "s", $params);
	mysqli_stmt_execute($preparedStatement);
}

function getItems(mysqli $databaseSettings): array
{
	$items = [];
	$query = "
		SELECT TITLE, DESCRIPTION, CATEGORY, EMAIL FROM web.ad;
	";
	$resultQuery = $databaseSettings->query($query);

	foreach ($resultQuery as $row)
	{
		$items[] = buildTask($row);
	}

	return $items;
}

function getCategory(mysqli $databaseSettings): array
{
	$categories = [];
	$query = "
		SELECT CATEGORY FROM web.ad 
	";
	$resultQuery = $databaseSettings -> query($query);

	foreach ($resultQuery as $row)
	{
		$categories[] = $row['CATEGORY'];
	}
	return $categories;
}

