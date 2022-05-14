<?php

namespace Connection;
use Connection\DatabaseConnectionSettings;
use mysqli;

class DatabaseConnection
{
	private static mysqli $database;
	public function __construct(DatabaseConnectionSettings $settings)
	{
		$this -> connectToDataBase($settings);
	}

	public static function connectToDatabase(DatabaseConnectionSettings $settings): mysqli
	{
		self::$database = mysqli_init();
		$dbConnect = self::$database->real_connect($settings->getHost(), $settings->getUsername(),
												   $settings->getPassword(), $settings->getDatabaseName());
		$dbChangeEncoding = mysqli_set_charset(self::$database, "utf8mb4");
		$error = mysqli_errno(self::$database). ":" .mysqli_error(self::$database);
		if(!$dbConnect || !$dbChangeEncoding)
		{
			trigger_error($error);
		}
		return self::$database;
	}
}