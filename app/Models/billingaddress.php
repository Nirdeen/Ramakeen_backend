<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billingaddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'name ',
        'email ',
        'address',
        'id',
        'country ',
        'state',
        'exp year',
        'cvv',
        'exp month',
        'code',
        'name of credit card',
        'credit card number',
        'wasata_id'
        
    ];
    public function wasata(){
        return $this->belongsTo( wasata::class,'wasata_id','id');
    }
}
