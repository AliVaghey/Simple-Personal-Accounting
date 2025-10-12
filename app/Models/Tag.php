<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'color',
        'usage_percentage',
        'transactions_count',
    ];

    public function transTags(): HasMany
    {
        return $this->hasMany(TransTag::class, 'tag_id');
    }
}
