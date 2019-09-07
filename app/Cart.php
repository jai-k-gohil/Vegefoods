<?php

namespace App;

use Session;

class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
             $this->items = $oldCart->items;
             $this->totalQty = $oldCart->totalQty;
             $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) {
        error_reporting(E_ERROR);
        $storedItem = new \App\CartItem($id,$item->name,$item->price,$item->description,0,$item->image);
        //check if item already exists
        //if yes then increment its quantity
        //if no then add it to the cart
        if ($this->items) {
            if ($this->existsInArray($storedItem,$this->items)) {
                    $storedItem = $this->items[$id];
            }

        }
        $storedItem->qty++;
        $storedItem->price = $item->price * $storedItem->qty;
        $this->items[$storedItem->id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }

    public function remove($id) {
        $this->totalQty -= $this->items[$id]->qty;
        unset($this->items[$id]);
    }

    public function existsInArray($entry, $array)
    {
        foreach ($array as $compare) {
            if ($compare->id == $entry->id) {
                return true;
            }
            return false;
        }
    }

}
