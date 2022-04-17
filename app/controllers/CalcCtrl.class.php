<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\calcResult;

// Kontroler
class CalcCtrl
{
    private $form;
    private $result;

    //Konstruktor - inicjalizacja właściwości
    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    //pobranie parametrów
    public function getParams()
    {
        $this->form->amount = getFromRequest('amount');
        $this->form->time = getFromRequest('time');
        $this->form->rate = getFromRequest('rate');
    }
    //walidacja
    public function validate()
    {
        if (!(isset($this->form->amount) && isset($this->form->time) && isset($this->form->rate))) {
            return false;
        }

        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty kredytu.');
        }
        if ($this->form->time == "") {
            getMessages()->addError('Nie podano okresu spłacania kredytu.');
        }
        if ($this->form->rate == "") {
            getMessages()->addError('Nie podano wartości oprocentowania.');
        }

        if (!getMessages()->isError()) {
            if (!is_numeric($this->form->amount)) {
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->time)) {
                getMessages()->addError('Czas: podaj liczbę całkowitą');
            }
            if (!is_numeric($this->form->rate)) {
                getMessages()->addError('Źle podane oprocentowanie');
            }
        }
        return !getMessages()->isError();
    }
    //Przetwarzanie
    public function action_calcCompute()
    {
        $this->getParams();
        if ($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $n = floatval($this->form->time) * 12;
            $r = floatval($this->form->rate) / 100;
            getMessages()->addInfo('Parametry poprawne.');

            $this->result->result = $this->form->amount * (($r / 12 * ((1 + $r / 12) ** $n)) / (((1 + $r / 12) ** $n) - 1));
            $this->result->result = round($this->result->result, 2);

            getMessages()->addInfo('Wykonano obliczenia.');
            # dodajemy kod zwiazany z BD
            $this->insertIntoDb();
            getMessages()->addInfo('Dodano rekod do bazy danych.');
        }
        $this->generateView();

    }

    public function action_calcShow()
    {
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    //Generowanie widoku
    public function generateView()
    {
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_description', 'Mało profesjonalny kalkulator kredytowy. Nie wiem co się tutaj dzieje :(');
        getSmarty()->assign('page_header', 'Oblicz ratę kredytu');

        //zmienne
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        // wywołanie szablonu
        getSmarty()->display('calcView.tpl');
    }

    private function insertIntoDb()
    {
        getDb()->insert('wynik', [
            "kwota" => $this->form->amount,
            "lat" => $this->form->time,
            "procent" => $this->form->rate,
            "rata" => $this->result->result,
            "data" => date("Y-m-d H:i:s"),
        ]);
    }
}
