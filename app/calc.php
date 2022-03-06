<?php
require_once dirname(__FILE__).'/../config.php';
// amount, time, rate
$amount = $_REQUEST ['amount'];
$time = $_REQUEST ['time'];
$rate = $_REQUEST ['rate'];


if ( ! (isset($amount) && isset($time) && isset($rate))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $amount == "") {
	$messages [] = 'Nie podano kwoty kredytu.';
}
if ( $time == "") {
	$messages [] = 'Nie podano okresu spłacania kredytu.';
}
if ( $rate == "") {
	$messages [] = 'Nie podano wartości oprocentowania.';
}


if (empty( $messages )) {
	if (! is_numeric( $amount )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $time )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	 if (! is_numeric( $rate )) {
				$messages [] = 'Źle podane oprocentowanie';
	}	

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { 
	$amount = intval($amount);
	$n = floatval($time) * 12;
	$r = floatval($rate)/100;

	 $result = $amount * (($r / 12 * ((1 + $r/12) ** $n)) / ( ((1 + $r/12) ** $n) - 1 ));
	}
	$result = round($result, 2);


include 'calc_view.php';