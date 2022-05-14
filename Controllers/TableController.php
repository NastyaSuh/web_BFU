<?php

use Getting\ItemsFromDatabase;
use Getting\CategoriesFromDatabase;
use Connection\Config;
use Render\Render;

class TableController
{
	private Getting\ItemsFromDatabase $items;
	private Getting\CategoriesFromDatabase $categories;

	public function __construct()
	{
		$config = new Config();
		$this->items = new ItemsFromDatabase($config -> getDbConnectionItems());
		$this->categories = new CategoriesFromDatabase($config -> getDbConnectionItems());
	}

	public  function renderTable()
	{
		Render::renderTemplate("Pages/table.php", [
			'items' => $this->items,
			'category' => $this->categories
		]);
	}

}