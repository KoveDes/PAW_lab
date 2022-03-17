<?php
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';
// amount, time, rate
function getParams(&$form)
{
    $form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['time'] = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
    $form['rate'] = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;
}

function validate(&$form, &$messages)
{
    if (!(isset($form['amount']) && isset($form['time']) && isset($form['rate']))) {
        return false;
    }

    if ($form['amount'] == "") {
        $messages[] = 'Nie podano kwoty kredytu.';
    }
    if ($form['time'] == "") {
        $messages[] = 'Nie podano okresu spłacania kredytu.';
    }
    if ($form['rate'] == "") {
        $messages[] = 'Nie podano wartości oprocentowania.';
    }

    if (count($messages) == 0) {
        if (!is_numeric($form['amount'])) {
            $messages[] = 'Kwota nie jest liczbą całkowitą';
        }
        if (!is_numeric($form['time'])) {
            $messages[] = 'Czas: podaj liczbę całkowitą';
        }
        if (!is_numeric($form['rate'])) {
            $messages[] = 'Źle podane oprocentowanie';
        }
    }
    if (count($messages) != 0) {
        return false;
    } else {
        return true;
    }
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function calculate(&$form, &$messages, &$result)
{
    $form['amount'] = intval($form['amount']);
    $n = floatval($form['time']) * 12;
    $r = floatval($form['rate']) / 100;

    $result = $form['amount'] * (($r / 12 * ((1 + $r / 12) ** $n)) / (((1 + $r / 12) ** $n) - 1));
    $result = round($result, 2);
}

//ustaw zmienne
$form = null;
$result = null;
$messages = [];

getParams($form);

if (validate($form, $messages)) {
    calculate($form, $messages, $result);
}

//Przygotowanie danych do szablonu.

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);

$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_description', 'Mało profesjonalny kalkulator kredytowy. Nie wiem co się tutaj dzieje :(');
$smarty->assign('page_header', 'Oblicz ratę kredytu');

//zmienne
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);

// wywołanie szablonu
$smarty->display(_ROOT_PATH . '/app/calc.html');
