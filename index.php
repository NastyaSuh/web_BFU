<?php
// region task1: Link access
$very_bad_unclear_name = "15 chicken wings";
$order = $very_bad_unclear_name;
$order .= "and some spicy sauce";
echo $very_bad_unclear_name . "\n";
// endregion

//region task2: Numbers
$digit = 5;
echo $digit . "\n";

$float_digit = 273.5;
echo "float digit = " . $float_digit. "\n";

echo 12 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "the difference in spending money = " . ($last_month - $this_month) . "\n";
// endregion

//region task3: Division and multiplication
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "\n";
// endregion

//region task4: Power of number
echo 8**2;
// endregion

//region task5: Assignment statement
$my_num = 10;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
// endregion

//region task6: Math functions
$a = 10;
$b = 3;
$remainder = $a % $b;

if($remainder == 0)
{
	echo "Делится без остатка" . "\n";
}
else
{
	echo "Делится с остатком: " . $remainder . "\n";
}

$st = pow(2, 10);
$root = sqrt(245);
$arr = [4, 2, 5 , 19, 13, 0 ,10];
$sum = 0;
foreach ($arr as $num)
{
	$sum += pow($num, 2);
}
$result = sqrt($sum);

echo "sqrt 0:" . round(sqrt(379), 1);
echo "sqrt 1:" . round(sqrt(379), 2);
echo "sqrt 2:" . round(sqrt(379), 3);
$array = [
	'ceil' => ceil(sqrt(587)),
	'floor' => floor(sqrt(587))
];


echo min([4, -2, 5, 19, -130, 0, 10]) . max([4, -2, 5, 19, -130, 0, 10]);

echo rand(0, 100);
$arr1 = [];
while(sizeof($arr1) < 10)
{
	array_push($arr1, rand(0, 100));
}

$a = -10;
$b = 68;
echo  abs($a - $b);
$arr2 = [1, 2, -1, -2, 3, -3];
$new_arr2 = [];
foreach ($arr2 as $num)
{
	array_push($new_arr2, abs($num));
}

$number = 30;
$del = [];
for($i = 1; $i < $number + 1; $i ++)
{
	if($number % $i == 0)
	{
		array_push($del, $i);
	}
}

$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$quantity = 0;
$sum = 0;
for($i = 0; $i < sizeof($arr3); $i++)
{
	$sum += $arr3[$i];
	$quantity++;
	if($sum > 10)
	{
		break;
	}
}
//endregion

//region task7: Functions
function printStringReturnNumber(): int
{
	echo "some string" . "\n";
	return 10;
}
$my_num = printStringReturnNumber();
echo $my_num . "\n";
//endregion

//region task8: Functions
function increaseEnthusiasm(string $str) : string
{
	return $str . "!";
}
echo increaseEnthusiasm("string");

function repeatThreeTimes(string $str): string
{
	return str_repeat($str, 3);
}
echo repeatThreeTimes("string1");
echo increaseEnthusiasm(repeatThreeTimes("string2"));

function cut(string $str, int $length = 10): string
{
	return substr($str, 0, $length);
}
echo cut("Lorem ipsum dolor sit amet.");

function recursivePrint(array $array, int $i = 0): void
{
	echo $array[$i] . "\n";
	if ($i === sizeof($array))
	{
		return;
	}
	recursivePrint($array, $i + 1);
}

function recursiveSum(int $num): int
{
	$result = 0;
	while($num > 0)
	{
		$result += $num % 10;
		$num /= 10;
	}
	if($result > 9)
	{
		recursiveSum($result);
	}
	return $result;
}
//endregion