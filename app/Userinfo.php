<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //
    protected $fillable=['user_id','phone','DOB','address','city','state'];
    public function user()
    {
return $this->hasOne(User::class);
    }
}
