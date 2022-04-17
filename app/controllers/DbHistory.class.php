<?php
namespace app\controllers;

class DbHistory
{
    public function action_showDbHistory()
    {
        if (!inRole('admin')) {
            getMessages()->addError("Tylko administrator ma dostęp do tej strony!");
            forwardTo('calc');
        } else {
            getMessages()->addInfo('Hello');
            $this->getFromDb();
            $this->generateView();
        }
    }

    private function getFromDb()
    {
        # wywołanie obiektu Medoo
        $data = getDb()->select("wynik", [
            "idwynik",
            "kwota",
            "lat",
            "procent",
            "rata",
            "data",
        ]);
        getSmarty()->assign('data', $data);
    }

    public function generateView()
    {
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Historia Wynikow');
        getSmarty()->display('DbHistoryView.tpl');
    }
}
