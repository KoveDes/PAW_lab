<!--
Kontroler jako jedyny punkt wejścia incjujący aplikację

    Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
    pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

    Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
    Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

    Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app
-->
<?php
require_once 'init.php';

switch ($action) {
    default: // 'calcView'
        //utwórz obiekty i użyj
        $ctrl = new \app\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->calculate();
        break;
    case 'action1':
        // working_1
        print('Working_1');

} 