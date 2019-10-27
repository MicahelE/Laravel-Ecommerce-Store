<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['id','name','email','address','items','total','user_id','delivery','payment','method'];
    //
}
