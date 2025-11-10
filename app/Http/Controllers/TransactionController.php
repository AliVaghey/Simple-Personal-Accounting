<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Transaction;
use App\Models\TransTag;
use Illuminate\Database\Query\JoinClause;

class TransactionController extends Controller
{
    static public function showStats(int $user_id, $from, $to): array
    {
        $incomes = Transaction::query()
            ->where('user_id', '=', $user_id)
            ->whereBetween('created_at', [$from, $to])
            ->where('is_expense', false)
            ->sum('amount');

        $expenses = Transaction::query()
            ->where('user_id', '=', $user_id)
            ->whereBetween('created_at', [$from, $to])
            ->where('is_expense', true)
            ->sum('amount');

        $tags = Tag::query()
            ->where('tags.user_id', '=', $user_id)
            ->join('trans_tags', function (JoinClause $join) use ($from, $to) {
                $join->on('tags.id', '=', 'trans_tags.tag_id')
                    ->whereBetween('trans_tags.created_at', [$from, $to]);
            })
            ->select(['tags.id', 'tags.name', 'tags.color'])
            ->distinct()
            ->get();

        $total_tags = TransTag::query()
            ->join('transactions', function (JoinClause $join) use ($from, $to, $user_id) {
                $join->on('transactions.id', '=', 'trans_tags.transaction_id')
                    ->where('transactions.user_id', '=', $user_id)
                    ->whereBetween('transactions.created_at', [$from, $to]);
            })
            ->get();
        $percentage = [];
        $summations = [];


        foreach ($tags as $tag) {
            $total = $total_tags->sum('amount');
            $sum = TransTag::query()
                ->join('transactions', function (JoinClause $join) use ($from, $to, $user_id) {
                    $join->on('transactions.id', '=', 'trans_tags.transaction_id')
                        ->where('transactions.user_id', '=', $user_id)
                        ->whereBetween('transactions.created_at', [$from, $to]);
                })
                ->where('tag_id', $tag->id)
                ->sum('amount');
            $summations[$tag->id] = $sum;
            $percentage[$tag->id] = intval($sum / $total * 100, 2);
        }

        return [
            'incomes' => $incomes,
            'expenses' => $expenses,
            'tags' => $tags,
            'percentage' => $percentage,
            'summations' => $summations
        ];
    }
}
