<?php
require_once "Duck.php";
require_once "FlyNoWay.php";
require_once "MuteQuack.php";

class DecoyDuck extends Duck {
	public function __construct() {
		$this->FlyBehavior = new FlyNoWay();
		$this->QuackBehavior = new MuteQuack();
	}

	public function display() {
		echo 'Обманка<br>';
	}
}
?>