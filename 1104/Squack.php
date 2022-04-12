<?php
require_once "QuackBehavior.php";

class Squack implements QuackBehavior {
	public function quacks() {
		echo ' ПИИИ-ПИИИИ!<br>';
	}
}
?> 