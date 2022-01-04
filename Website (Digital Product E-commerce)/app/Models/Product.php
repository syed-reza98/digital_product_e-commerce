<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    protected $fillable = ['cat_id','name', 'description','price','status','quantity'];

    public function cats(){
        return $this->belongsTo(Cat::class, 'cat_id');
    }

    public function orders(){
        return $this->hasMany(Order::class );
    }

    // public function categorys(){
    //     return $this->belongsTo(Cat::class);
    // }
    // public function cats()
    // {
    //     return $this->hasOne(Cat::class);
    // }
}
