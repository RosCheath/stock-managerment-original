<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;
    public const STOCK_IN = 'in';
    public const STOCK_OUT = 'out';

    public $fillable = [
        'quantity','location','product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

