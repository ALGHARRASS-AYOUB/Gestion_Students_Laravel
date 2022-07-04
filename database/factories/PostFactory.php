<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

     /*********  creating a factory to generate date instead of seeder either static or dynamic ************** */
    public function definition()
    {
        // return [
        //     'title'=>'post 2',
        //     'comment'=>'hello this is my second comment',
        //     'min_to_read'=>5,
        //     'image_path'=>'empty',
        //     'is_published'=>true
        // ];
        // generate data dynamically using faker
        return [
            'title'=>$this->faker->unique()->sentence(),
            'comment'=>$this->faker->realText($maxNbChars=50),
            'min_to_read'=>$this->faker->numberBetween(1,10),
            'image_path'=>$this->faker->imageUrl(640,480),
            'is_published'=>true
        ];

    }
}
