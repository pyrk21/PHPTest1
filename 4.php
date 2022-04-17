<?

$city_id = $_GET['city_id'];

function tt_query($id) {
	$res = mysqli_query($link, "SELECT * FROM weather_log WHERE city_id = " . $id);
	return $id;
}

function tt_check1($id) {
	$pieces = explode(" ", $id);
	echo $pieces[0]; // кусок1
	echo $pieces[1]; // кусок2
	$id3 = "qqq".$pieces[0]."111";
	$id = mysqli_real_escape_string($id);
	tt_check2($id3);
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
	$rand1 = gmp_random_range(0, 100);
	if ($rand1 > 97) {
		tt_query($id);	
	} else {
		tt_check1($id);
	}
	
}



tt_query($city_id);


?>
