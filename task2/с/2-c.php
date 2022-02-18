<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$salary = $_POST['salary'];
$song = $_POST['song'];

array_pop($_POST);

if(!isset($name) || !isset($surname) || !isset($age) || !isset($salary) || !isset($song))
{
	echo "error";
	return;
}

else
{
	$_SESSION = $_POST;
}

foreach ($_SESSION as $key => $value)
{
	echo '<ul>' . '<li>' . "your {$key} is {$value}" . '</ul>' . '<br>';
}
