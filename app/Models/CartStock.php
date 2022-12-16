<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStock extends Model
{
    use HasFactory;

    protected $table = "cart_stock";

    protected $guarded = [];

    protected $with = ['stock'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
