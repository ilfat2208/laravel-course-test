<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'preview' =>$this->faker->text(50),
            'thumbnail'=> $this->faker->image("public/storage/posts", 640, 520, null, false),

        ];
    }
}
