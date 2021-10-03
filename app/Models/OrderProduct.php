<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];
    
    protected $table = 'order_product';

    public function Product()
    {
        return Product::where('id', '=', $this->product_id)->first();
    }
}
