<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','cost','amount','category_id'];

    public function category(){
         return $this->hasOne(Category::class,'id','category_id');
        //agar siz  keylarni qo'ymasangiz o'zi bunaqa qilib ketadi
        //return $this->hasOne(Category::class,'product_id','id');
        //ya'ni
        //return $this->hasOne(Category::class,'tablename_id','id');
    }
}
