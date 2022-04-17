<?php
//ladowanie i inicjalizacja klasy Config
require_once 'core/Config.class.php';
$config = new core\Config();
require_once 'config.php'; // ładuje wartości

function &getConf() {
    global $config;
    return $config;
}
//ladowanie Messages
require_once 'core/Messages.class.php';
$messages = new core\Messages();

function &getMessages() {
    global $messages;
    return $messages;
}

//Przygotowanie Smarty, tylko raz
$smarty = null;
function &getSmarty() {
    global $smarty;
    //stwórz jeśli nie był wcześniej ustawiony
    if (!isset($smarty)) {
        include_once 'lib/smarty/Smarty.class.php';
        $smarty = new Smarty();
        //przypisz konfigurację i messages
        $smarty->assign('config', getConf());
        $smarty->assign('messages', getMessages());
        //zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
        $smarty->setTemplateDir(array(
            'views' => getConf()->root_path . '/app/views',
            'templates' => getConf()->root_path . '/app/views/templates',
        ));
    }
    return $smarty;
}

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

# załaduj i stwórz router
require_once 'core/Router.class.php';
$router = new core\Router;
function &getRouter(): core\Router{
    global $router;
    return $router;
}

require_once 'core/functions.php';

# uruchom sesję
session_start();
$config->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : [];
$router->setAction(getFromRequest('action'));

# załaduj i stwórz baze danych
require_once 'Medoo/Medoo.php';
try {
    $database = new \Medoo\Medoo([
        'type' => 'mysql',
        'database' => 'kalk',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_polish_ci',
        'port' => 3306,
        'option' => [
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],

    ]);
} catch (PDOExcepetion $ex) {
    getMessage()->addError("DB Error: " . $ex->getMessage());
}

function &getDb(): Medoo\Medoo{
    global $database;
    return $database;
}
