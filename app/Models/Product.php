<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'old_price',
        'promotion',
        'img_id',
        'brand_id',
        'description'
    ];


    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function Orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('price')->withTimestamps();
    }
}
