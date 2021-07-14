<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\models\Product;
use App\Models\Transaction;

class TransactionDetail extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'products_id', 'trasactions_id'
    ];

    protected $hidden = [];

    public function trasaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
