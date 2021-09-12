<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'adress_id',
        'user_id',
        'observation',
        'payment_type'
    ];

    public function Products()
    {
        return $this->belongsToMany(Product::class)->withPivot('price')->withTimestamps();
    }

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }
}
