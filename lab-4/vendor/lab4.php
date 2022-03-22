<?php
require_once "autoload.php";

$client = new Google_Client();
$client->setApplicationName('Google Sheets');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');


$service = new Google_Service_Sheets($client);
$spreadsheetId = "1WKa5Upfr0fm5t7jm-yIaAKiUsegRHH5AYiRra_V60Ys";

$response = $service->spreadsheets_values->get($spreadsheetId, "A1:D");
$sheet_value = $response->getValues();

if (!empty($_POST["email"]) and !empty($_POST["category"]) and !empty($_POST["headline"]) and !empty($_POST["text"])) {

	$valueRange= new Google_Service_Sheets_ValueRange();
	$i = count((is_countable($sheet_value)?$sheet_value:[]))+1;
	$range = "A$i:D";
	$valueRange->setValues([[$_POST["category"], $_POST["email"], $_POST["headline"], $_POST["text"]]]);
	$conf = ["valueInputOption" => "RAW"];

	$service->spreadsheets_values->update($spreadsheetId, $range, $valueRange, $conf);
	$sheet_value[] = [$_POST["category"], $_POST["email"], $_POST["headline"], $_POST["text"]];
}
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Таблица</title>
</head>
<body>
<form method="post">
	<label>
		e-mail<br>
		<input type="email" name="email"><br>
		Category<br>
		<select name="category" required>
			<option value="Sport">Sport</option>
			<option value="Auto">Auto</option>
			<option value="House">House-holding</option>
			<option value="Uni">Uni and school stuff</option>
		</select><br>
		Headline<br>
		<input type="text" name="headline"><br>
		Text<br>
		<textarea cols="50" rows="5" name="text"></textarea>
		<br><br>
		<input type="submit" name="submit" value="add"><br><br>
	</label>
</form>

<table border="1" width="100%">
	<tr bgcolor="#e6e6fa">
		<td width="20%">Category</td>
		<td width="20%">e-mail</td>
		<td width="20%">Headline</td>
		<td width="40%">Text</td>
	</tr>
	<?php
	foreach ((array)$sheet_value as $arr) {
		echo '<tr>';
		foreach ($arr as $i) {
			echo '<td>' . $i . '</td>';
		}
		echo '</tr>';
	}
	?>
</table>
</body>
</html>