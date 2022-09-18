<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(5)->create();

        foreach ($users as $user) {
            Post::factory(\rand(1, 5))->create([
                'author_id' => $user->id,
            ]);
        }
    }
}
