<?php
require_once "FlyBehavior.php";

class FlyWithWings implements FlyBehavior {
	public function fly() {
		echo 'Я лечу!<br>';
	}
}
?>