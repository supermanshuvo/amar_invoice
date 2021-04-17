<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = [
        'product_quantity',
        'Order_id',
    ];
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
