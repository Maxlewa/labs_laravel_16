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
                "title" => "Exemple d'article",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "image" => "blog/blog-1.jpg",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "user_id" => 1,
                "category_id" => 1,
                // "tag_id" => 3,
                "validate"=> 1,
                // "comment_id" => 1,
            ],
            [
                "title" => "Exemple d'article",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "image" => "blog/blog-2.jpg",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "user_id" => 1,
                "category_id" => 2,
                // "tag_id" => 3,
                "validate"=> 1,
                // "comment_id" => 1,
            ],
            [
                "title" => "Exemple d'article",
                "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "image" => "blog/blog-3.jpg",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "user_id" => 1,
                "category_id" => 4,
                // "tag_id" => 3,
                "validate"=> 1,
                // "comment_id" => 1,
            ],
        ]);
    }
}
