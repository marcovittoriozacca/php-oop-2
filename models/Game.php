<?php

class Game extends Product{
    public $genre;
    public static $type = 'Game';

    public function __construct($_category, string $_name, string $_description, string $_poster, float $_price, int $_quantity, string $_genre) {
        
        parent::__construct($_category, $_name, $_description, $_poster, $_price, $_quantity);

        $this->genre = $_genre;
    }

    //getters
    public function getGenre(){
        return $this->genre;
    }
    public static function getType(){
        return self::$type;
    }

    //setters
    public function setCalories($_newCalories){
        return $this->calories = $_newCalories;
    }
}