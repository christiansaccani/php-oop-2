<?php

require_once __DIR__ . '/Category.php';

class Product {

    public $id;
    public $name;
    public $price;
    public $category;

    public $image;

    protected $type;
    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     */
    function __construct($id, $name, $price, Category $category) {
        $this->id = $id;
        $this->name = $name;

        if(is_numeric($price)) {

            $this->price = $price;       
        } else {

            throw new Exception("Il prezzo inserito non è di valore numerico");
        }

        $this->category = $category;
    }
    
    /**
     * setImage
     *
     * @param  string $image
     */
    public function setImage($image) {
        $this->image = $image;
    }


    public function getType() {
        return $this->type;
    }
}