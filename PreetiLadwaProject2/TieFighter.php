<?php
class TieFighter{

	public $fModel;
	public $fclass;
	public $fcost;
	public $fManufacturer;
	public $fLength;
	public $Width;
	public $fHeight;
	public $fMass;
	public $fCrew;
	public $fMaxSpeed;
	public $fMaxClimb;
	public $fArmament;
	public $fPropulsion;
	public $fHull;

	function __construct($fModel, $fClass, $fCost, $fManufacturer, $fLength, $fWidth, $fHeight, $fMass, $fCrew, $fMaxSpeed, $fMaxClimb, $fArmament, $fPropulsion, $fHull){

		$this->fModel = $fModel;
		$this->fClass = $fClass;
		$this->fCost = $fCost;
		$this->fManufacturer = $fManufacturer;
		$this->fLength = $fLength;
		$this->fWidth = $fWidth;
		$this->fHeight = $fHeight;
		$this->fMass = $fMass;
		$this->fCrew = $fCrew;
		$this->fMaxSpeed = $fMaxSpeed;
		$this->fMaxClimb = $fMaxClimb;
		$this->fArmament = $fArmament;
		$this->fPropulsion = $fPropulsion;
		$this->fHull = $fHull;
	}

	function displayFighter(){
		echo "<h3>Model: ".$this->fModel."</h3>";
		echo "<h3>Class: ".$this->fClass."</h3>";
		echo "<h3>Cost: ".$this->fCost."</h3>";
		echo "<h3>Manufacturer: ".$this->fManufacturer."</h3>";
		echo "<h3>Length: ".$this->fLength."</h3>";
		echo "<h3>Width: ".$this->fWidth."</h3>";
		echo "<h3>Height: ".$this->fHeight."</h3>";
		echo "<h3>Mass: ".$this->fMass."</h3>";
		echo "<h3>Crew: ".$this->fCrew."</h3>";
		echo "<h3>MaxSpeed: ".$this->fMaxSpeed."</h3>";
		echo "<h3>fMaxClimb: ".$this->fMaxClimb."</h3>";
		echo "<h3>Armament: ".$this->fArmament."</h3>";
		echo "<h3>Propulsion: ".$this->fPropulsion."</h3>";
		echo "<h3>Hull: ".$this->fHull."</h3>";
		

	}

}