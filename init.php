<?php
//ladowanie i inicjalizacja klasy Config
require_once 'core/Config.class.php';
$config = new  core\Config();
require_once 'config.php'; // ładuje wartości

function &getConf(){
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
function &getSmarty(){
    global $smarty;
    //stwórz jeśli nie był wcześniej ustawiony
    if(!isset($smarty)) {
		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisz konfigurację i messages
		$smarty->assign('config',getConf());
		$smarty->assign('messages',getMessages());
		//zdefiniuj lokalizację widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'views' => getConf()->root_path.'/app/views',
			'templates' => getConf()->root_path.'/app/views/templates'
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

require_once 'core/functions.php';
$action = getFromRequest('action');
