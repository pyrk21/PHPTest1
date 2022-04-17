<?

$city_id = $_GET['city_id'];

function tt_query($id) {
	$res = mysqli_query($link, "SELECT * FROM weather_log WHERE city_id = " . $id);
	return $id;
}

function tt_check1($id) {
	$id = "qqq".$id."111";
	tt_check2($id);
}

function tt_check2($id) {
	tt_check3($id);
}

function tt_check3($id) {
	tt_check4($id);
}

function tt_check4($id) {
	tt_check5($id);
}

function tt_check5($id) {
	tt_check6($id);
}

function tt_check6($id) {
	tt_query($id);	
}



tt_check1($city_id);


?>
