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
                "photo" => "team/2.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "admin@labs.be",
                "password" => Hash::make("admin1"),
                "role_id" => 1,
                "job_id" => 4,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
            ],
            [
                "firstname" => "Alex",
                "name" => "Gaspar",
                "age" => 23,
                "photo" => "team/1.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "alex@labs.be",
                "password" => Hash::make("alex1"),
                "role_id" => 4,
                "job_id" => 5,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
            ],
            [
                "firstname" => "Michel",
                "name" => "Dupont",
                "age" => 34,
                "photo" => "team/3.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "michel@labs.be",
                "password" => Hash::make("michel1"),
                "role_id" => 4,
                "job_id" => 1,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
            ]
        ]);
    }
}
