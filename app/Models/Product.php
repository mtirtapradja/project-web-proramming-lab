<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function category(){
        $this->belongsTo(Category::class);
    }

    function transaction_detail(){
        $this->hasMany(Transaction_detail::class);
    }
}
