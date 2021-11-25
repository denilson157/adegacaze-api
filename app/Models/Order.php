<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'adress_id',
        'user_id',
        'observation',
        'payment_type',
        'status_id',
        'date_finish'
    ];

    public function Products()
    {
        return $this->belongsToMany(Product::class)->withPivot('price')->withPivot('quantity')->withTimestamps();
        // return $this->belongsToMany(Product::class, 'order_product')->orWhere('order_product.order_id', $this->id);
    }


    // public function products()
    // {
    //     return OrderProduct::where('order_id', '=', $this->id)->get();
    // }

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }
}
