<?php
require_once "QuackBehavior.php";

class Quack implements QuackBehavior {
	public function quacks() {
		echo ' КРЯ-КРЯ! Я на самом деле разговариваю...<br>';
	}
}
?> 