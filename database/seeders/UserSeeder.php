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
                "validate" => 1,
            ],
            [
                "firstname" => "webmaster",
                "name" => "Webmaster",
                "age" => 23,
                "photo" => "team/1.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "webmaster@labs.be",
                "password" => Hash::make("webmaster1"),
                "role_id" => 2,
                "job_id" => 5,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
                "validate" => 1,
            ],
            [
                "firstname" => "writer",
                "name" => "Writer",
                "age" => 34,
                "photo" => "team/3.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "writer@labs.be",
                "password" => Hash::make("writer1"),
                "role_id" => 3,
                "job_id" => 1,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
                "validate" => 1,
            ],
            [
                "firstname" => "member",
                "name" => "Member",
                "age" => 34,
                "photo" => "team/3.jpg",
                "description" => "Exemple de description, petit bio sympa",
                "email" => "member@labs.be",
                "password" => Hash::make("member1"),
                "role_id" => 4,
                "job_id" => 4,
                "genre_id" => 1,
                // "post_id" => null,
                "testimonial_id" => null,
                "validate" => 0,
            ]
        ]);
    }
}
