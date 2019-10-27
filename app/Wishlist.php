<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $fillable=['user_id','product_id'];
    public function product()
    {
       return $this->hasMany(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
