<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_company_name',
        'product_details',
        'product_type',
        'product_price',
        'product_image',
    ];
    public function invoice(){
        return $this->hasOne('App\Models\Invoice');
    }
}
