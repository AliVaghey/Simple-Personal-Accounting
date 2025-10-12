<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Transaction;
use App\Models\TransTag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransTagSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::select('id')->get()->pluck('id')->toArray();
        $user_id = User::where('name', 'test')->select('id')->first()->id;
        Transaction::chunk(50, function ($transactions) use ($tags, $user_id) {
            $transtags = [];
            foreach ($transactions as $transaction) {
                $tag_ids = fake()->randomElements($tags, rand(1, 20));
                foreach ($tag_ids as $tag_id) {
                    $transtags[] = [
                        'user_id' => $user_id,
                        'tag_id' => $tag_id,
                        'transaction_id' => $transaction->id
                    ];
                }
                TransTag::insert($transtags);
            }
        });
    }
}
