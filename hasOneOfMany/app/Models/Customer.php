<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function latestOrder()
    {
        $this->hasOne(Order::class)->latestOfMany();
    }

    public function oldestOrder()
    {
        $this->hasOne(Order::class)->oldestOfMany();
    }

    public function largestOrder()
    {
        $this->hasOne(Order::class)->ofMany('amount', 'max');
    }

    public function smallestOrder()
    {
        $this->hasOne(Order::class)->ofMany('amount', 'min');
    }
}
