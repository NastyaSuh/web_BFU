<?php
$text = $_GET['textBody'];
if(!isset($text))
{
	return;
}
else{
	echo "Words quantity: " . str_word_count($text) . '<br>';
	echo "Chars quantity: " . strlen($text);
}