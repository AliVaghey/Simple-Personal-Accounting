<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Transaction;
use App\Models\TransTag;
use Illuminate\Database\Query\JoinClause;

class TransactionController extends Controller
{
    static public function showStats($from, $to): array
    {
        $incomes = Transaction::query()
            ->whereBetween('created_at', [$from, $to])
            ->where('is_expense', false)
            ->sum('amount');

        $expenses = Transaction::query()
            ->whereBetween('created_at', [$from, $to])
            ->where('is_expense', true)
            ->sum('amount');

        $tags = Tag::query()
            ->join('trans_tags', function (JoinClause $join) use ($from, $to) {
                $join->on('tags.id', '=', 'trans_tags.tag_id')
                    ->whereBetween('trans_tags.created_at', [$from, $to]);
            })
            ->select(['tags.id', 'tags.name', 'tags.color'])
            ->distinct()
            ->get();

        $total_tags = TransTag::query()
            ->join('transactions', function (JoinClause $join) use ($from, $to) {
                $join->on('transactions.id', '=', 'trans_tags.transaction_id')
                    ->whereBetween('transactions.created_at', [$from, $to]);
            })
            ->get();
        $percentage = [];
        foreach ($tags as $tag) {
            $count = $total_tags->where('tag_id', $tag->id)->count();
            $percentage[$tag->id] = intval($count / $total_tags->count() * 100);
        }

        return [
            'incomes' => $incomes,
            'expenses' => $expenses,
            'tags' => $tags,
            'percentage' => $percentage,
        ];
    }
}
