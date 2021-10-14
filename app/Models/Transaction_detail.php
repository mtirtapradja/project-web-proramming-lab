<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    use HasFactory;

    function product()
    {
        return $this->belongsTo(Product::class);
    }

    function Transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
