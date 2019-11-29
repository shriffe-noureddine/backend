<?php

class HtmlString {
	private $string;

	public function __construct($string) {
		$this->string = $string;
	}

	public function setString($string) {
		$this->string = $string;
	}

	public function getString() {
		return $this->string;
	}

	public function getBoldString() {
		return '<b>' . $this->getString() . '</b>';
	}

	public function getItalicString() {
		return '<i>' . $this->getString() . '</i>';
	}

	public function getItalicBoldString() {
		return '<i>' . $this->getBoldString() . '</i>';
	}
}

/*
$markup = new HtmlString();
$markup->setString('My strinnnng');
$bold = $markup->getBoldString();

echo $bold; /*


$markup = new HtmlString('My strinnnnng');
echo $markup->getBoldString();

