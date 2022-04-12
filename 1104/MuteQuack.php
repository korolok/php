<?php
require_once "QuackBehavior.php";

class MuteQuack implements QuackBehavior {
	public function quacks() {
		echo ' *Неловкое молчание*<br>';
	}
}
?> 