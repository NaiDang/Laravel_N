<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;
    protected $table="type_products";

    public function prodcuts(){
        return $this->hasMany("App/Product_type");
    }
}
