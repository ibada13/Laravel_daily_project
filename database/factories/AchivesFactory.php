<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Extra;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achives>
 */
class AchivesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "content"=>$this->faker->text(255)
        ];
    }
    public function Extra(Extra $extra){
        return $this->state(function (array $attr) use ($extra){
            return [

                'extra_id'=>$extra->id,
            ];
        } );
    }
}
