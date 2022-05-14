<?php

namespace Getting;

use Connection\DatabaseConnection;
use Connection\DatabaseConnectionSettings;
use mysqli;

class CategoriesFromDatabase
{
	private static mysqli $database;
	public function __construct(DatabaseConnectionSettings $settings)
	{
		self::$database = DatabaseConnection::connectToDataBase($settings);
	}

	public static function getCategory(): array
	{
		$categories = [];
		$query = "
		SELECT CATEGORY FROM web.ad 
	";
		$result = mysqli_query(self::$database, $query);

		foreach ($result as $row)
		{
			$categories[] = $row['CATEGORY'];
		}
		return $categories;
	}
}