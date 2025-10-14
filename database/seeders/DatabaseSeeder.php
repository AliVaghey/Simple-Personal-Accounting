<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Transaction;
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

        Tag::factory()
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
    }
}
