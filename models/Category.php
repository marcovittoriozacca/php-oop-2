<?php

class Category{
    public $category;

    public function __construct(string $_category){
        $this->category = $_category;
    }

    public function getCategory(){
        return $this->category;
    }
}