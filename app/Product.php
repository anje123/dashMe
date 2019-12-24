<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["givers_name","givers_email","product_image","product_name","product_price","giver_area",
    "product_bio","giver_phoneno"];
}
