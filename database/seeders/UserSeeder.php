<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "firstname" => "admin",
                "name" => "Admin",
                "age" => 25,
                "photo" => "test.jpg",
                "description" => "Exemple de description",
                "email" => "admin@labs.be",
                "password" => Hash::make("admin1"),
                "role_id" => 1,
                "job_id" => 1,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
            ]
        ]);
    }
}
