<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoUse extends Model
{
    use HasFactory;
    protected $table = 'promo_uses';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function promo(){
        return $this->belongsTo('App\Models\Promo');
    }
}
