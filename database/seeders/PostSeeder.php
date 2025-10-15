<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // إنشاء مستخدم واحد فقط
        $user = User::factory()->create();

        // توليد 1000 بوست بشكل جماعي
        $posts = [];

        for ($i = 0; $i < 10000; $i++) {
            $posts[] = [
                'user_id' => $user->id,
                'title' => $faker->sentence(6),
                'description' => $faker->paragraph(3),
                'photo' => $faker->imageUrl(640, 480, 'posts', true),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach (array_chunk($posts, 500) as $chunk) {
            \DB::table('posts')->insert($chunk);
        }
    }
}
