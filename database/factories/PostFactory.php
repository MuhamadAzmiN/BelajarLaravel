<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // banyak cara nya
            // 'body' => collect($this->faker->paragraphs(5,10))
            //         ->map(function($p){
            //             return "<p>$p</p>";
            //         }),
                'body' => collect($this->faker->paragraphs(5,10))
                    ->map(fn($p) => "<p>$p</p>"
                        )
                        ->implode(''),

            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,5),
            'role_id' => mt_rand(1,10)
        ];
    }
}
