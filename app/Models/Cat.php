<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'cats';
    protected $primaryKey = 'id';
    public function produts(){
        return $this->hasMany(Product::class);
    }
}
