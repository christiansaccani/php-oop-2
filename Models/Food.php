<?php

require_once __DIR__ . '/Product.php';

require_once __DIR__ . "/../Traits/Sizeable.php";

class Food extends Product {

    use Sizeable;

    public $weight;
    public $mainIngredient;
    public $expireDate;
    
    /**
     * __construct
     *
     * @param  int $id
     * @param  string $name
     * @param  float $price
     * @param  Category $category
     * @param  float $weight
     * @param  string $mainIngredient
     * @param  string $expireDate
     * @param  float $priceSmall
     * @param  float $priceBig
     */
    function __construct($id, $name, $price, Category $category, $weight, $mainIngredient, $expireDate, $priceSmallSize, $priceBigSize) {
        parent::__construct($id, $name, $price, $category);
        $this->weight = $weight;
        $this->mainIngredient = $mainIngredient;
        $this->expireDate = $expireDate;
        $this->priceSmallSize = $priceSmallSize;
        $this->priceBigSize = $priceBigSize;

        // specifico che la categoria di questo prodotto è "cibo"
        $this->type = 'Cibo';
    }

}