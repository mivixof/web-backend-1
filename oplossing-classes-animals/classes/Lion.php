<?php
	class Lion extends Animal
	{
	protected $species;
	public function __construct( $name, $sex, $health, $species )
	{	
		parent::__construct( $name, $sex, $health );
		$this->species = $species;
	}
	public function getSpecies()
	{	
		return $this->species;
	}
	public function doSpecialMove()
	{
		$specialMove = 'roar';
		return $specialMove ;
	}
	}
?>