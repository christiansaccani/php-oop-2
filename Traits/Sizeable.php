<?php

// "dimensionabile"

trait Sizeable {

    public $priceSmallSize;
    public $priceBigSize;

    public function getAllPrices() {
        return "Prezzo small size: " . $this->priceSmallSize ."€<br>Prezzo big size: " . $this->priceBigSize . '€';
    }
}