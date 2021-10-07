<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function user()
    {
        $this->belongsTo(User::class);
    }

    function transaction_detail(){
        $this->hasMany(Transaction_detail::class);
    }
}
