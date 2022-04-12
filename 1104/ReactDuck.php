<?php
require_once "Duck.php";
require_once "flyNowings.php";
require_once "Reactquack.php";

class ReactDuck extends Duck {
	public function __construct() {
		$this->FlyBehavior = new flyNowings();
		$this->QuackBehavior = new Reactquack();
	}

	public function display() {
		echo 'Реактивная<br>';
	}
}
?>