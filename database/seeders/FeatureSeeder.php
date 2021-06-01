<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-002-caliper"
            ],
            [
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-019-coffee-cup"
            ],
            [
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-020-creativity"
            ],
            [
                "title" => "Get in the lab",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-037-idea"
            ],
            [
                "title" => "Projects online",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-025-imagination"
            ],
            [
                "title" => "SMART MARKETING",
                "text" => "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icon" => "flaticon-008-team"
            ],
        ]);
    }
}
