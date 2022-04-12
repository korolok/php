<?php
	require_once 'stratege.php';
	class concretestrategymultiply implements Strategy { 
	public function execute($a, $b) {
		return $a*$b;
	}
}
?>