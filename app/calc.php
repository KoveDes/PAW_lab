<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount, &$time, &$rate){
	$time = isset($_POST['time']) ? $_POST['time'] : null;
	$amount = isset($_POST['amount']) ? $_POST['amount'] : null;
	$rate = isset($_POST['rate']) ? $_POST['rate'] : null;
}

// $amount = $_REQUEST ['amount'];
// $time = $_REQUEST ['time'];
// $rate = $_REQUEST ['rate'];

function validate(&$time, &$amount, &$rate, &$messages) {
	if ( ! (isset($amount) && isset($time) && isset($rate))) {
	//$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
	return false;
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

if (count($messages) != 0) return false;

if (! is_numeric( $amount )) {
	$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
}
if (! is_numeric( $time )) {
	$messages [] = 'Druga wartość nie jest liczbą całkowitą';
}	
	if (! is_numeric( $rate )) {
	$messages [] = 'Źle podane oprocentowanie';
}	

if (count ($messages) != 0) return false;
else return true;

}

// 3. wykonaj zadanie jeśli wszystko w porządku
function calcCreditRate(&$amount, &$time, &$rate, &$messages, &$result) {
	global $role;
	$amount = intval($amount);
	$n = floatval($time) * 12;
	$r = floatval($rate)/100;
   $result = $amount * (($r / 12 * ((1 + $r/12) ** $n)) / ( ((1 + $r/12) ** $n) - 1 ));
	$result = round($result, 2);
	}

//ustaw zmienne
$time = null;
$amount = null;
$rate = null;
$result = null;
$messages = [];

getParams($amount, $time, $rate);
if(validate($amount, $time, $rate, $messages) ) {
	calcCreditRate($amount, $time, $rate, $messages, $result);
}


include 'calc_view.php';