<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $table = 'promos';
    protected $fillable = [
        'promo_code',
        'promo_type',
        'promo_amount_limit',
        'promo_status',
        'promo_start_date',
        'promo_end_date',
    ];
    public function promouse(){
        return $this->hasMany(PromoUse::class);
    }
}
