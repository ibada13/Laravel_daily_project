<?php

namespace Database\Factories;
use App\Models\Topics;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubTopics>
 */
class SubTopicsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(4)
        ];
    }
    public function Topics(Topics $top){
        return $this->state(function (array $attr) use ($top){
            return[
                'topic_id'=>$top->id,
            ];
        });
    }
}
