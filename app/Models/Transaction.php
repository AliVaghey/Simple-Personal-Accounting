<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    protected $fillable = [
        'amount',
        'description',
        'is_expense'
    ];

    public function transTags(): HasMany
    {
        return $this->hasMany(TransTag::class, 'transaction_id');
    }
}
