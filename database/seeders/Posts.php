<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 100;
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'obtainers_id' => $faker->numberBetween(1, 10),
                'content' => $faker->sentence,
                'image_url' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


