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
getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';

/*  STARA WERSJA
switch ($action) {
default:
control('app\\controllers', 'CalcCtrl', 'generateView', ['user', 'admin']);
case 'calcCompute': // akcja PRYWATNA
control(null, 'CalcCtrl', 'process', ['user', 'admin']);
case 'login': // akcja PUBLICZNA
control('app\\controllers', 'LoginCtrl', 'DoLogin');
case 'logout':
control(null, 'LoginCtrl', 'DoLogout', ['user', 'admin']);
}
 */