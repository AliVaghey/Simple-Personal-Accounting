<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'color',
        'usage_percentage',
        'transactions_count',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transTags(): HasMany
    {
        return $this->hasMany(TransTag::class, 'tag_id');
    }
}
