<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            // 9 PREMIERS
            [
                "icon" => "flaticon-023-flask",
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-011-compass",
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-037-idea",
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-039-vector",
                "title" => "Social Media",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-036-brainstorming",
                "title" => "Brainstorming",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-026-search",
                "title" => "Documented",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-018-laptop-1",
                "title" => "Responsive",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-043-sketch",
                "title" => "Retina ready",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-012-cube",
                "title" => "Ultra modern",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            // FIN DES 9 PREMIERS

            // 9 SUIVANTS
            [
                "icon" => "flaticon-023-flask",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-011-compass",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-037-idea",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-039-vector",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-036-brainstorming",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-026-search",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-018-laptop-1",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-043-sketch",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icon" => "flaticon-012-cube",
                "title" => "Maxou",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            // TOTAL 18
        ]);
    }
}
