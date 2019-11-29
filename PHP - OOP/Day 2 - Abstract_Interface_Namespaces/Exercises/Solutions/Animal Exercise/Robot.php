<?php

class Robot implements IWorker
{
	private $_id;
	private $_color;

	public function __construct($id, $color)
	{
		$this->_id = $id;
		$this->_color = $color;
	}

	public function work()
	{
		return $this->_id . ' doing some robot stuff.';
	}
}

$creatures = [$cat, $dog, $human, $dog2];
foreach ($creatures as $creature) {
	# code...
	$creature->makeSound();
}
