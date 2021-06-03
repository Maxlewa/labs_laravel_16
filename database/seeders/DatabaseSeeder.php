<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VideoSeeder::class,
            ServiceSeeder::class,
            DiscoverSeeder::class,
            SubjectSeeder::class,
            FeatureSeeder::class,
            MapSeeder::class,
            ImageSeeder::class,
            LogoSeeder::class,
            TitleSeeder::class,
            ContactSeeder::class,
            GenreSeeder::class,
            JobSeeder::class,
            RoleSeeder::class,
            TestimonialSeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
