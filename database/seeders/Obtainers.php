<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Obtainers extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $limit=100;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('obtainers')->insert([
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Change 'password' to the desired default password
                'full_name' => $faker->name,
                'date_of_birth' => $faker->date(),
                'bio' => $faker->paragraph,
                'profile_image_url' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}






