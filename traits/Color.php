<?php

trait Color{
    protected $color;

    public function getColor(){
        return $this->color;
    }
    public function setColor(string $_color){
        $this->color = $_color;
    }

}