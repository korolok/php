<?php
	header('Content-Type: text/html; charset=utf-8');
	$ch1 = $_POST['n'];
	$ch2 = $_POST['s'];
	$ch3 = $ch1 + $ch2;
	echo $ch1.'+'.$ch2.'='.$ch3.'<br>';
	echo '<a href="index.html">Вернуться назад</a>';
?>