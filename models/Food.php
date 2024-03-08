<?php

class Food extends Product{
    public $calories;
    public static $type = 'Food';

    public function __construct($_category, string $_name, string $_description, string $_poster, float $_price, int $_quantity, int $_calories) {
        
        parent::__construct($_category, $_name, $_description, $_poster, $_price, $_quantity);

        $this->calories = $_calories;
    }

    //getters
    public function getCalories(){
        return $this->calories;
    }
    public static function getType(){
        return self::$type;
    }

    //setters
    public function setCalories($_newCalories){
        return $this->calories = $_newCalories;
    }
}