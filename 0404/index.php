<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'cat.php';
	require_once 'dog.php';
	$pet1 = new Cat('Василий', 'Сфинкс');
	$pet1->display(); 
	$pet1->voice();
	$pet2 = new Dog('Брабос', 'Овчарка');
	$pet2->display();
	$pet2->voice(); 

?>