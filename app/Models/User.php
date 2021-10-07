<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    function transactions()
    {
        $this->hasMany(Transaction::class);
    }

    function gender()
    {
        $this->belongsTo(Gender::class);
    }

    function roles()
    {
        $this->belongsTo(Role::class);
    }
}
