<?php
require_once "FlyBehavior.php";

class FlyNoWay implements FlyBehavior {
	public function fly() {
		echo 'Я падаю!<br>';
	}
}
?>