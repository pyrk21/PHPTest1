<?

$city_id = $_GET['city_id'];

function tt_query($id) {
	$res = mysqli_query($link, "SELECT * FROM weather_log WHERE city_id = " . $id);
	return $id;
}

echo(tt_query($city_id));


?>
