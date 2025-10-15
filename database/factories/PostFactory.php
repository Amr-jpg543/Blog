<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // علشان نستخدم الـ user_id

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // ينشئ مستخدم وهمي لكل بوست
            'title' => $this->faker->sentence(6), // عنوان عشوائي
            'description' => $this->faker->paragraph(3), // وصف عشوائي
            'photo' => $this->faker->imageUrl(640, 480, 'posts', true), // صورة وهمية
        ];
    }
}
