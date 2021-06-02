<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                "title" => "Title",
                "text" => "Textou",
                "image" => "test.jpg",
                "category_id" => null,
                "comment_id" => null,
            ],
        ]);
    }
}
