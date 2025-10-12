<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransTag extends Model
{
    protected $fillable = [
        'transaction_id',
        'tag_id',
    ];
}
