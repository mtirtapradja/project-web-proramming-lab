<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    function roles()
    {
        return $this->belongsTo(Role::class);
    }

    function carts(){
        return $this->hasOne(Cart::class);
    }

    protected $guarded = ['id'];
}
