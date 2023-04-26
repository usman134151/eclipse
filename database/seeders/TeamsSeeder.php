<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'John Doe',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => 1,
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Alley',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Leo',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => 1,
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Mario',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Mike',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Nala Jane',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Patrick Jane',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('teams')->updateOrInsert([
            'name' => 'Sammy S.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sapiente veritatis obcaecati perferendis at saepe repellendus reiciendis officiis ut optio corporis vero consequatur ipsum earum est, ex adipisci, praesentium laudantium.',
            'status' => rand(0,1),
            'provider_count' => rand(1 , 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
