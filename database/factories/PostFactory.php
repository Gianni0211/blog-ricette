<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title' => $this->faker->realText($maxNbChars = 30, $indexSize = 2),
           'slug' => $this->faker->realText($maxNbChars = 40, $indexSize = 2),
           'body' => $this->faker->realText($maxNbChars = 500, $indexSize = 2),
           'img' => './storage/app/public/img/prova.png',
           'user_id' => User::factory()
        ];
    }
}
