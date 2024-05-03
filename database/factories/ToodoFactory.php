<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Extra;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toodo>
 */
class ToodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "content"=>$this->faker->text(255),
            "is_Done"=>$this->faker->randomElement([true , false]),
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
