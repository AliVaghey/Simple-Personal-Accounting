<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\TransTag;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('tags', [
            'tags' => $user->tags()->orderByDesc('usage_percentage')->get()
        ]);
    }

    static public function calculateTagPercentage(Tag $tag): int
    {
        $total = TransTag::query()
            ->join('transactions', function (JoinClause $join) {
                $join->on('transactions.id', '=', 'trans_tags.transaction_id');
            })
            ->sum('amount');

        $sum = TransTag::query()
            ->join('transactions', function (JoinClause $join) {
                $join->on('transactions.id', '=', 'trans_tags.transaction_id');
            })
            ->where('tag_id', $tag->id)
            ->sum('amount');

        return intval($sum / $total * 100, 2);
    }
}
