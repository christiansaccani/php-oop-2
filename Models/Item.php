<?php


class Item {

    public $image = 'https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg';
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


    function __construct($title, $price, $category, $type) {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;

        if ($category == "dog") {
            $this->category = '<i class="fa-solid fa-dog"></i>';
        } else if ($category == "cat") {
            $this->category = '<i class="fa-solid fa-cat"></i>';
        }
    }

}