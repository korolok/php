<?php
require_once "FlyBehavior.php";
require_once "QuackBehavior.php";

abstract class Duck {
	protected $FlyBehavior;
	protected $QuackBehavior;

	abstract public function display();

	public function performFly() {
		$this->FlyBehavior->fly();
	}

	public function performQuack() {
		$this->QuackBehavior->quacks();
	}

	public function swim(){
		echo 'Все утки умеют плавать, даже деревянные<br>';
	}

	public function noswim(){
		echo 'Тону как терминатор в лаве!<br>';
	}
}
?>