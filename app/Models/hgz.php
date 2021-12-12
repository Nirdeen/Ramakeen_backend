<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 

class hgz extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'id',
        'phone',
        'khdma',
        'user-id'
    ];
  
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
