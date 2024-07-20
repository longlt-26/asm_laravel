<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use voku\helper\ASCII;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
      'category_id',
        'name',
        'slug',
        'img_thumb',
        'price',
        'price_sale',
        'description',
        'quantity',

    ];
    public $casts = [
        'is_active' => 'boolean',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
