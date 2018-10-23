<?php

// Gibt eine Variable, Array, etc. formatiert aus und stoppt danach die Ausführung des Quellcodes
function dnd($data) {
	echo '<pre>';
	var_dump($data);	
	echo '</pre>';
	die();
}

// Wandelt alle anwendbaren Zeichen in HTML-Entitäten um.
// Konvertiert sowohl doppelte als auch einfache Anführungszeichen.
function sanitize($input) {
	return htmlentities($input, ENT_QUOTES, 'UTF-8');
}

function currentUser() {
	return Users::currentLoggedInUser();
}

function posted_values($post) {
	$clean_array = [];
	foreach($post as $key => $value) {
		$clean_array[$key] = sanitize($value);
	}
	return $clean_array;
}

function currentPage() {
	$currentPage = $_SERVER['REQUEST_URI'];
	if($currentPage == PROOT || $currentPage == PROOT.'home/index') {
		$currentPage = PROOT . 'home';
	}
	return $currentPage;
}