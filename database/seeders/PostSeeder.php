<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunidades = Community::all();

        foreach ($comunidades as $comunidad) {
            $users = $comunidad->users;
            foreach ($users as $user) {

                Post::factory()
                    ->has(Comment::factory(2)->for($user))
                    ->create([
                        'user_id' => $user->id,
                        'community_id' => $comunidad->id,
                    ]);
            }
        }
    }
}
