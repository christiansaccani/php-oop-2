<?php

require_once __DIR__ . '/Product.php';

require_once __DIR__ . "/../Traits/Sizeable.php";


class Toy extends Product {

    use Sizeable;

    public $material;    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  float $priceSmall
     * @param  float $priceBig
     */
    function __construct($id, $name, $price, Category $category, $material, $priceSmallSize, $priceBigSize) { 

        parent::__construct($id, $name, $price, $category);
        
        $this->type = "Gioco";
        $this->material = $material;
        $this->priceSmallSize = $priceSmallSize;
        $this->priceBigSize = $priceBigSize;
    }
}