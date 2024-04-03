<?php


class Item {

    public $image;
    public $title;
    public $price;
    public $category;
    public $type;

    
    /**
     * __construct
     *
     * @param  string $image
     * @param  string $title
     * @param  float $price
     * @param  string $category
     * @param  string $type
    */


    function __construct($image, $title, $price, $category, $type) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }

}

?>