<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        $password = Hash::make('secretos');

        $user = User::factory()->has(Profile::factory())
            ->has(Community::factory()->count(2))
            ->create([
                'name' => 'Rafael Andión',
                'email' => 'randion@cifpfbmoll.eu',
                'email_verified_at' => now(),
//                'password' => $password, // aplica default en migración
                'fechalta' => now(),
                'remember_token' => Str::random(10),
            ]);
$community= Community::factory()->create();
        User::factory(3)
//            ->has(Profile::factory())
            ->hasAttached($community)
            ->has(Community::factory(2))
            ->create();


    }
}
