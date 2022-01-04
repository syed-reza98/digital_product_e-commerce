<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = [
        'name',
    ];
    
    public function products(){
        return $this->hasMany(Product::class );
    }
    // public function produts(){
    //     return $this->hasMany(Product::class);
    // }
}
