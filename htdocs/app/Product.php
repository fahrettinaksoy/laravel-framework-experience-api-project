<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'products_id';
    protected $fillable = ['code', 'model', 'sku', 'image', 'quantity', 'price', 'status'];
}