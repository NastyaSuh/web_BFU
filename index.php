<?php
//task1: Link access
$very_bad_unclear_name = "15 chicken wings";
$order = $very_bad_unclear_name;
$order .= "and some spicy sauce";
echo $very_bad_unclear_name . "\n";

//task2: Numbers
$digit = 5;
echo $digit . "\n";

$float_digit = 273.5;
echo "float digit = " . $float_digit. "\n";

echo 12 . "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "the difference in spending money = " . ($last_month - $this_month) . "\n";

//task3: Division and multiplication
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "\n";

//task4: Power of number
echo 8**2;

//task5: Assignment statement
$my_num = 10;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;