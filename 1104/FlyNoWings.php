<?php
require_once "FlyBehavior.php";

class FlyNoWings implements FlyBehavior {
	public function fly() {
		echo 'Я не знаю как остановиться!!!<br>';
	}
}
?>