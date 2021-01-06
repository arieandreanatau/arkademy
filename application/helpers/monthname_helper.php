<?php
function dd($arr)
{
	echo "<pre>" . print_r($arr, true) . "</pre>";
}
function get_monthname($number)
{
	if ($number == 1 or $number ==  "01") {
		return "Januari";
	} else if ($number == 2 or $number == "02") {
		return "Februari";
	} else if ($number == 3 or $number ==  "03") {
		return "Maret";
	} else if ($number == 4 or  $number == "04") {
		return "April";
	} else if ($number == 5 or  $number == "05") {
		return "Mei";
	} else if ($number == 6 or  $number == "06") {
		return "Juni";
	} else if ($number == 7 or  $number == "07") {
		return "Juli";
	} else if ($number == 8 or  $number == "08") {
		return "Agustus";
	} else if ($number == 9 or $number == "09") {
		return "September";
	} else if ($number == "10") {
		return "Oktober";
	} else if ($number == "11") {
		return "November";
	} else if ($number == "12") {
		return "Desember";
	}
}


function filterDay($date, $arrDay)
{
	$weekDay = date('l', strtotime($date));

	if ($weekDay == 'Monday') {
		$day = 'Senin';
	} else if ($weekDay == 'Tuesday') {
		$day = 'Selasa';
	} else if ($weekDay == 'Wednesday') {
		$day = 'Rabu';
	} else if ($weekDay == 'Thursday') {
		$day = 'Kamis';
	} else if ($weekDay == 'Friday') {
		$day = 'Jumat';
	} else if ($weekDay == 'Saturday') {
		$day = 'Sabtu';
	} else {
		$day = 'Minggu';
	}

	if (in_array($day, $arrDay)) {
		return true;
	}
	return false;
}

function getDay($date)
{
	$weekDay = date('l', strtotime($date));

	if ($weekDay == 'Monday') {
		$day = 'Senin';
	} else if ($weekDay == 'Tuesday') {
		$day = 'Selasa';
	} else if ($weekDay == 'Wednesday') {
		$day = 'Rabu';
	} else if ($weekDay == 'Thursday') {
		$day = 'Kamis';
	} else if ($weekDay == 'Friday') {
		$day = 'Jumat';
	} else if ($weekDay == 'Saturday') {
		$day = 'Sabtu';
	} else {
		$day = 'Minggu';
	}

	return $day;
}
