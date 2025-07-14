<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $keytyp = 'int';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }
}
