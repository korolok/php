<?php
require_once "QuackBehavior.php";

class ReactQuack implements QuackBehavior {
	public function quacks() {
		echo ' *Звуки доходят спустя 30сек* 
		Я летаю со скоростью звука!<br>';
	}
}
?>