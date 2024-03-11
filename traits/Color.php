<?php

trait Color{
    protected $color;

    public function getColor(){
        return $this->color;
    }
    public function setColor($_color){
        if(!is_string($_color)){
            throw new Exception ($_color . " deve essere una stringa!" );
        }
        $this->color = $_color;
    
    }

}