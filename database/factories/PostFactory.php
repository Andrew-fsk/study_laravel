<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->text(),
            'likes' => random_int(0, 100),
            'image' =>  $this->faker->imageUrl(),
            'is_published' => 1,
            'category_id' => Category::get()->random()->id,
        ];
    }
}
