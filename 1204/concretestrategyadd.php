<?php
	require_once 'stratege.php';
	class concretestrategyadd implements Strategy { 
	public function execute($a, $b) {
		return $a+$b;
	}
}
?>