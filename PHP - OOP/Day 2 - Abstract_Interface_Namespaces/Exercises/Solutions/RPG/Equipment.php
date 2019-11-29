<?php

define('SWORD', 'Sword');
define('SHIELD', 'Shield');

class Equipment
{
	private $_name;
	private $_description;
	private $_type;
	private $_bonusAtk;
	private $_bonusDef;
	private $_bonusHealth;
	// Allow Type Of Equipment
	const ALLOW_TYPE = array(
		'SWORD' => 'Sword',
		'SHIELD' => 'Shield'
	);

	public function __construct($name, $description, $type, $atk, $def, $health)
	{
		$this->_name = $name;
		$this->_description = $description;
		$this->_type = $type;
		$this->_bonusAtk = $atk;
		$this->_bonusDef = $def;
		$this->_bonusHealth = $health;
	}

	public function getType()
	{
		return $this->_type;
	}

	public function __toString()
	{
		return 'Name : ' . $this->_name . '<br>'
			. 'Atk : ' . $this->_bonusAtk . '<br>'
			. 'Def : ' . $this->_bonusDef . '<br>'
			. 'Health : ' . $this->_bonusHealth . '<br>';
	}
}
