<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    public function category() {
        return $this->belongsTo('\App\Category');
    }

    public static function getProductsById($ids) {
        $string = implode(",",$ids);
        $results = DB::select( DB::raw("SELECT * FROM products WHERE id IN (".$string).")" );
        return $results;
    }
}
