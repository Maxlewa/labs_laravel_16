<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name" => "Nom",
                "email" => "comment@comment.be",
                "comment" => "Exemple de commentaire",
                "dateDay" => date("d"),
                "dateMonth" => date("M"),
                "dateYear" => date("Y"),
                "post_id" => 1,
                "validate" => 1,
            ]
        ]);
    }
}
