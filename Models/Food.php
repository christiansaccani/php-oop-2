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

        if(is_numeric($weight)) {

            $this->weight = $weight;    
        } else {

            throw new Exception("Il peso inserito non è di valore numerico");
        }

        $this->mainIngredient = $mainIngredient;
        $this->expireDate = $expireDate;

        if(is_numeric($priceSmallSize)) {

            $this->priceSmallSize = $priceSmallSize;
        } else {

            throw new Exception("Il peso inserito non è di valore numerico");
        }

        if(is_numeric($priceBigSize)) {

            $this->priceBigSize = $priceBigSize;
        } else {

            throw new Exception("Il peso inserito non è di valore numerico");
        }


        // specifico che la categoria di questo prodotto è "cibo"
        $this->type = 'Cibo';
    }

}