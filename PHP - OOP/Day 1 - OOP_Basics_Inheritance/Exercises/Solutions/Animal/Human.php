<?php 

require_once 'Creature.php';

class Human extends Creature {

	public function work() {
		return $this->_name . ' is working !<br>';
	}

	public function talk() {
		return 'Hello, my name is ' . $this->_name . ', and Im a ' . $this->_sex . '<br>';
	}
}
