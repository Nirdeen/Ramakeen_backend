<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wasata extends Model
{
    use HasFactory;
    protected $fillable = [
        'name m',
        'email m',
        'phone m',
        'id',
        'name n ',
        'email n',
        'phone n',
        'enthaa talab il wasata',
        'user-id'
        
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
public function billings(){
    return $this->hasMany(billing::class,'wasata_id','id');

}
}
