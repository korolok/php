<?php
	require_once 'stratege.php';
	class concretestrategysubstract implements Strategy { 
	public function execute($a, $b) {
		return $a-$b;
	}
}
?>