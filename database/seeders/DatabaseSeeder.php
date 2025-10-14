<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Transaction;
use App\Models\TransTag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()
            ->withoutTwoFactor()
            ->create([
            'name' => 'test',
            'email' => 'test@test.com'
        ]);

        $tags = Tag::factory()
            ->count(20)
            ->create([
                'user_id' => $user->id,
            ]);

        Transaction::factory()
            ->count(200)
            ->create([
                'user_id' => $user->id,
            ]);

        $this->call([
            TransTagSeeder::class
        ]);

        $total_transactions = $user->transactions()->count();
        foreach ($tags as $tag) {
            $total_transTags = TransTag::where('tag_id', $tag->id)->where('user_id', $user->id)->count();
            $tag->usage_percentage = intval($total_transTags / $total_transactions  * 100);
            $tag->transactions_count = $total_transTags;
            $tag->save();
        }
    }
}
