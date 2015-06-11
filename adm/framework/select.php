<?php
class Select {

	private $group;
	private $options;

	function __construct ($group) {
		$this -> group = $group;
		$this -> options = array();
	}

	public function getGroup() {
		return $this -> group;
	}

	public function getOption() {
		return $this -> options;
	}

	public function addOption($value, $text) {
		array_push($this->options, new Option($value, $text));
	}

}
class Option {

	private $value;
	private $text;

	function __construct ($value, $text) {
		$this -> value = $value;
		$this -> text = $text;
	}

	public function getValue() {
		return $this -> value;
	}

	public function getText() {
		return $this -> text;
	}

}
?>