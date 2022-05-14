<?php

namespace Adding;

use Connection\DatabaseConnection;
use Connection\DatabaseConnectionSettings;
use mysqli;

class ItemsToDatabase
{
	private static mysqli $database;
	public function __construct(DatabaseConnectionSettings $settings)
	{
		self::$database = DatabaseConnection::connectToDataBase($settings);
	}

	public static function addItem(): void
	{
		$query = "
	INSERT INTO web.ad (TITLE, DESCRIPTION, CATEGORY, EMAIL)
	VALUES (?, ?, ?, ?)
	";

		$preparedStatement = mysqli_prepare(self::$database, $query);
		mysqli_stmt_bind_param($preparedStatement, "s", self::$params);
		mysqli_stmt_execute($preparedStatement);
	}
}