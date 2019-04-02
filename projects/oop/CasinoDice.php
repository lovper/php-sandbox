<?php

require_once("Dice.php");

class CasinoDice extends Dice
{
    protected $cheat, $averageRoll;
    
    public function __construct($cheat = null, $averageRoll)
    {
        parent::__construct($numSides = 6, $lastRolled);
    }
    
    public function rollDice()
    {
        parent::rollDice();
        if(count($this->lastRolled)>100){
            array_shift($this->lastRolled);
        }
    }
    
    public function getAllRolls(){parent::getAllRolls();}
    
    public function average(){
        return $this->averageRoll = array_sum($this->lastRolled)/$this->timesToRoll;
    }
    
    public function roll($timesToRoll=1)
    {
        for($i=0;$i<$timesToRoll;$i++){
            $this->rollDice();
        }
        return $this->getAllRolls();
    }
    
    
    
}