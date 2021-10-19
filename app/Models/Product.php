<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function transaction_detail()
    {
        return $this->hasMany(Transaction_detail::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    protected $guarded = ['id'];
}
