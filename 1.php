<?

$city_id = $_GET['city_id'];
$res = mysqli_query($link, "SELECT * FROM weather_log WHERE city_id = " . $city_id);

?>
