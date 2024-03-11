<?php

trait Color{
    protected $color;

    public function getColor(){
        return $this->color;
    }
    public function setColor($_color){
        if(!is_string($_color)){
            throw new InvalidArgumentException ($_color . " deve essere una stringa!" );
        }elseif (strlen($_color) > 30) {
            throw new LengthException ($_color . " non può superare i 30 caratteri!" );
        }
        $this->color = $_color;
    
    }

}