<?php
	header('Content-Type: text/html; charset=utf-8');
	$ch1 = $_POST['n'];
	$ch2 = $_POST['s'];
	$dei = $_POST['dei'];
	switch ($dei) {
		case '-':
		echo $ch1 .'-' .$ch2 .'='. $ch1 - $ch2;
		break;
		case '+':
		echo $ch1 .'+' .$ch2 .'='. $ch1 + $ch2;
		break;
		case '*':
		echo $ch1 .'*' .$ch2 .'='. $ch1 * $ch2;
		break;
		case '/':
		echo $ch1 .'/' .$ch2 .'='. $ch1 / $ch2;
		break;
	}
	echo '<br><a href="index.html">Вернуться назад</a>';
?>