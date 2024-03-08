<?php

class PetBed extends Product{
    public $size;
    public static $type = 'PetBed';

    public function __construct($_category, string $_name, string $_description, string $_poster, float $_price, int $_quantity, string $_size) {
        
        parent::__construct($_category, $_name, $_description, $_poster, $_price, $_quantity);

        $this->size = $_size;
    }

    //getters
    public function getSize(){
        return $this->size;
    }
    public static function getType(){
        return self::$type;
    }

    //setters
    public function setSize($_newSize){
        return $this->size = $_newSize;
    }

    //general functions
    public function sizeInCm($_size){
        switch ($_size) {
            case 'sm':
                return '45x30x30';
            case 'md':
                return '60x45x45';
            case 'lg':
                return '80x70x70';
            default:
                return '50x50x50';
        }
    }
}