<?php

namespace Database\Factories;

use App\Models\SubTopics;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>$this->faker->sentence(3),
            "note" => $this->faker->text(200),
        ];
    }
    public function SubTopics(SubTopics $sub){
        return $this->state(function (array $attr) use($sub){
            return [
                'sub_topics_id'=>$sub->id,
            ];
        });
    }
}
