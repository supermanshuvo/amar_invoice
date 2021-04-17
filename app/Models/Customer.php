<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'customer_name',
        'customer_contact',
        'customer_alt_contact',
        'customer_address',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
