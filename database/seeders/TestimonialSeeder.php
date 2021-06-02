<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "firstname" => "Alex",
                "name" => "Luiz",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Maçon",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "Ayoub",
                "name" => "Dupont",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Web Developer",
                "image" => "avatar/01.jpg",
            ],
            [
                "firstname" => "Dawid",
                "name" => "Van Helsing",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Pompier",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "Ayhan",
                "name" => "Dutranoix",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "PDG",
                "image" => "avatar/01.jpg",
            ],
            [
                "firstname" => "Jamila",
                "name" => "Alimaj",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Designer",
                "image" => "avatar/02.jpg",
            ],
            [
                "firstname" => "Maxime",
                "name" => "Vervekken",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "job" => "Journaliste",
                "image" => "avatar/01.jpg",
            ],
        ]);
    }
}
