<?php
class Group {
	private $id;
	private $title;

	public function __construct($i, $t) {
		$this->id = $i;
		$this->title = $t;
	}
	public function getTitle() {
		return $this->title;
	}
}

?>