<?php

namespace Connection;

class Config
{
	private static array $tableHeaders;
	private  DatabaseConnectionSettings $databaseConnectionSetting;

	public function __construct()
	{
		self::$tableHeaders = [
			'email' => 'Электронная почта',
			'category' => 'Категория объявления',
			'title' => 'Заголовок объявления',
			'description' => 'Текст объявления'
		];
		$this->databaseConnectionSetting = new DatabaseConnectionSettings(
			'localhost', 'nastya', 'nastya', 'web');
	}

	public static function getTableHeader(): array
	{
		return self::$tableHeaders;
	}

	public function getDbConnectionItems(): DatabaseConnectionSettings
	{
		return $this -> databaseConnectionSetting;
	}
}


