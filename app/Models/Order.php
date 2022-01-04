<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=['product_id','quantity',
    'status','total','first_name','last_name',
    'address1','bkash','phone','email','payment_status',];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }

}
