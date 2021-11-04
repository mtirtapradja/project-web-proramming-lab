<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function transaction_detail()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    protected $fillable = ['user_id'];
}
