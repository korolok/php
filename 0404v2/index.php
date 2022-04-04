<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'student.php';
	$s1 = new Student('Королев','Кирилл','Николаевич','И-01'); 
	$s2 = new Student('Медведенко','Федор','Павлович','И-01');
	$s1->display();
	$s2->display();
	?>