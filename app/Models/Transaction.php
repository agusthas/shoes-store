<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalPrice()
    {
        return $this->orders()
            ->get()
            ->sum(function ($order) {
                return $order->price * $order->quantity;
            });
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
