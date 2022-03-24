<?php

require_once $config->root_path . '/lib/smarty/Smarty.class.php';
require_once $config->root_path . '/lib/Messages.class.php';
require_once $config->root_path . '/app/calc/CalcForm.class.php';
require_once $config->root_path . '/app/calc/CalcResult.class.php';

// Kontroler
class CalcCtrl
{
    private $msgs;
    private $form;
    private $result;

    //Konstruktor - inicjalizacja właściwości
    public function __construct()
    {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    //pobranie parametrów
    public function getParams()
    {
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->time = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
        $this->form->rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;
    }
    //walidacja
    public function validate()
    {
        if (!(isset($this->form->amount) && isset($this->form->time) && isset($this->form->rate))) {
            return false;
        }

        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty kredytu.');
        }
        if ($this->form->time == "") {
            $this->msgs->addError('Nie podano okresu spłacania kredytu.');
        }
        if ($this->form->rate == "") {
            $this->msgs->addError('Nie podano wartości oprocentowania.');
        }

        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->time)) {
                $this->msgs->addError('Czas: podaj liczbę całkowitą');
            }
            if (!is_numeric($this->form->rate)) {
                $this->msgs->addError('Źle podane oprocentowanie');
            }
        }
        return !$this->msgs->isError();
    }
    //Przetwarzanie
    public function calculate()
    {
        $this->getParams();
        if ($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $n = floatval($this->form->time) * 12;
            $r = floatval($this->form->rate) / 100;
            $this->msgs->addInfo('Parametry poprawne.');

            $this->result->result = $this->form->amount * (($r / 12 * ((1 + $r / 12) ** $n)) / (((1 + $r / 12) ** $n) - 1));
            $this->result->result = round($this->result->result, 2);

            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

    //Generowanie widoku
    public function generateView()
    {
        global $config;
        $smarty = new Smarty();
        $smarty->assign('app_url', $config->app_url);
        $smarty->assign('root_path', $config->root_path);
        $smarty->assign('config', $config);

        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_description', 'Mało profesjonalny kalkulator kredytowy. Nie wiem co się tutaj dzieje :(');
        $smarty->assign('page_header', 'Oblicz ratę kredytu');

//zmienne
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);
        $smarty->assign('messages', $this->msgs);

// wywołanie szablonu
        $smarty->display($config->root_path . '/app/calc/calcView.html');
    }
}
