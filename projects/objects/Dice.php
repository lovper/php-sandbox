<?php

class Dice {
    protected $numSides;
    protected $rolls;
    protected $lastRolled = [];
    
    /**
     * @param int numSides
     * @param int rolls
     */
    public function __construct($numSides = 6, $rolls = 1){
            if($numSides%2){
                echo "Tärningen måste ha ett jämt antal sidor<br>";
                $numSides=6;
                echo "Tärningen får 6 sidor (standard)<br>";
                
            }
            $this->numSides=$numSides;
    }
    
    /**
     * @param array lastRolled
     */
    public function rollDice(){
        $this->lastRolled[] = rand(1,$this->numSides);
    }
    /**
     * @return array
     */
    public function getLastRolled(){
        return $this->lastRolled;
    }
    /**
     * @return int
     */
    public function roll($rolls){
        $this->rolls = $rolls;
        for($i = 0; $i < $rolls; $i++){
            $this ->rollDice();
        }
        
        return $this->getLastRolled();
        
    }
}