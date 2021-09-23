<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'old_price',
        'promotion',
        'img',
        'img_id',
        'brand_id',
        'description',
    ];


    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
