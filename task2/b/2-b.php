<?php
$name = $_POST["textName"];
$surname = $_POST["textSurname"];
$age = $_POST["textAge"];

if (isset($name, $surname, $age))
{
	$_SESSION["textName"] = $name;
	$_SESSION["textSurname"] = $surname;
	$_SESSION["textAge"] = $age;

}

echo "hi, your name's {$_SESSION["textName"]} {$_SESSION["textSurname"]}?" . '<br>';
echo "and your age is {$_SESSION["textAge"]}, right?";
