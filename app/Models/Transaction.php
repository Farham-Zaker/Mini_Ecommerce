<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        "id",
        "ref_id",
        "status",
        "amount",
        "product_id",
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }
}
