<?php

/**
 * Index-Datei des Projekts
 *
 * Die Index-Datei lädt die Konfiguration, Helper-Funktionen und Klassen des Projekts.
 * Außerdem wird eine Session gestartet und die Bestandteile des URL-Pfades in einem Array gespeichert,
 * welches an die Router-Klasse übergeben wird. Somit dient die Index-Datei als zentrale Verteilstation.
 *
 * @author Enrico Lauterschlag <enrico.lauterschlag@web.de>
 * @package gartencowboy
 */

// Definition der Globalen Variablen DS und ROOT
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Laden der Konfiguration und Helper Funktionen
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

// Automatisches Laden der Klassen
function autoload($className){
	if(file_exists(ROOT . DS . 'core' . DS . $className . '.php')) {
		require_once(ROOT . DS . 'core' . DS . $className . '.php');
	}elseif(file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php')) {
		require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
	}elseif(file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php')) {
		require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
	}
}

spl_autoload_register('autoload');

// Starten einer Session
session_start();

// Auslesen des URL-Pfades und Speichern der einzelnen Bestandteile in einem Array
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

// Wenn der Remember-Me-Cookie gesetzt ist, wird der User automatisch eingeloggt, ohne Username und Passwort eingeben zu müssen.
if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
	Users::loginUserFromCookie();
}

// Übergabe der Variablen $url an die Router-Klasse, welche den Request anschliessend verteilt.
Router::route($url);
