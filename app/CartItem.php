<?php

namespace App;

class CartItem
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $qty;
    public $image;

    public function __construct($id,$name,$price,$description,$qty,$image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->qty = $qty;
    }

    public function update($oldCartItem) {
        $this->id = $oldCartItem->id;
        $this->name = $oldCartItem->name;
        $this->price = $oldCartItem->price;
        $this->description = $oldCartItem->description;
        $this->image = $oldCartItem->image;
        $this->qty = $oldCartItem->qty;
    }

}
