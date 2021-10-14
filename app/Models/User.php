<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

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

    protected $guarded = ['id'];
}
