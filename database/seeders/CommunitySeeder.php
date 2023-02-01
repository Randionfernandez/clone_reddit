<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user= User::factory(2)->create();
//        Community::factory()->count(5)->for($users)->create(); // error: no funciona
//        Community::factory()->count(3)->hasAttached(User::factory(2))->create(); // Ok
        Community::factory()->count(3)->hasAttached($user)->create(); // Ok
//        Community::factory()->count(3)->hasAttached($user)->create(); // Ok
//        Community::factory(5)->has(User::factory())->create();
    }
}
