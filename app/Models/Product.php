<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $guarded=[];
    public function getPhotoAttribute($value){
        return ($value!==null)?asset('public/assets/images/products/'.$value):"";
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function order_details(){
        return $this->hasMany(Orderdetails::class,'product_id');
    }
}

