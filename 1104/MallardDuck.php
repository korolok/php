<?php
require_once "Duck.php";
require_once "flywithwings.php";
require_once "quacks.php";

class MallardDuck extends Duck {
	public function __construct() {
		$this->FlyBehavior = new flywithwings();
		$this->QuackBehavior = new quack();
	}

	public function display() {
		echo 'Живая<br>';
	}
}
?>