<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function count()
    {
        $cart = Cart::where('user_id', '=', Auth()->user()->id)->get();
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->quantity;
        }
        return $total;
    }

    public static function totalValue()
    {
        $cart = Cart::where('user_id', '=', Auth()->user()->id)->get();
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->product()->price * $item->quantity;
        }
        return $total;
    }
}
