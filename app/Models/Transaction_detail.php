<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    use HasFactory;

    function product(){
        $this->belongsTo(Product::class);
    }

    function Transaction(){
        $this->belongsTo(Transaction::class);
    }
}
