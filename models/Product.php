<?php

class Product{
    use Color;
    
    public $name;
    public $description;
    public $poster;
    public $category;
    public static $type = 'Product';
    protected $price;
    protected $quantity;

    public function __construct(
        Category $_category,
        string $_name = '',
        string $_description = '', 
        string $_poster = '', 
        float $_price = null, 
        int $_quantity = null,
    ){
        $this->category = $_category;
        $this->name = $_name;
        $this->description = $_description;
        $this->poster = $_poster;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }

    //getters
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImage(){
        return $this->poster;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public static function getType(){
        return self::$type;
    }

    //setters
    public function setName(string $_newName){
        return $this->name = $_newName;
    }
    public function setDescription(string $_newDescription){
        return $this->description = $_newDescription;
    }
    public function setImage(string $_newImage){
        return $this->poster = $_newImage;
    }
    public function setPrice(float $_newPrice){
        return $this->price = $_newPrice;
    }
    public function setQuantity(float $_newQuantity){
        return $this->quantity = $_newQuantity;
    }
}