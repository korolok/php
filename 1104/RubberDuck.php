<?php
require_once "Duck.php";
require_once "FlyNoWay.php";
require_once "Squack.php";

class RubberDuck extends Duck {
	public function __construct() {
		$this->FlyBehavior = new FlyNoWay();
		$this->QuackBehavior = new Squack();
	}

	public function display() {
		echo 'Резиновая<br>';
	}
}
?>