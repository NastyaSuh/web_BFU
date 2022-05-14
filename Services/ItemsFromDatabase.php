<?php

namespace Getting;

use Connection\DatabaseConnection;
use Connection\DatabaseConnectionSettings;
use mysqli;

class ItemsFromDatabase
{
	private static array $params;
	private static mysqli $database;
	public function __construct(DatabaseConnectionSettings $settings)
	{
		self::$database = DatabaseConnection::connectToDataBase($settings);
	}

	public static function getItems(): array
	{
		$items = [];
		$query = "
		SELECT TITLE, DESCRIPTION, CATEGORY, EMAIL FROM web.ad;
	";
		$result = mysqli_query(self::$database, $query);
		foreach ($result as $row)
		{
			$items[] = buildTask($row);
		}

		return $items;
	}


}

