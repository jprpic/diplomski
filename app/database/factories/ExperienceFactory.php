<?php

namespace Database\Factories;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = CV\Experience::class;
    public function definition()
    {
        return [
        ];
    }

    public function linked(){
        return $this->state(function (array $attributes, CV $CV){
            return [
                'cv_id' => $CV->id,
                'type' => $this->faker->randomElement(['employment', 'education']),
                'name' => $this->faker->jobTitle(),
                'source' => $this->faker->company(),
                'results' => json_encode($this->faker->sentences()),
                'started_at' => $this->faker->dateTimeBetween('-20 years'),
                'finished_at' => $this->faker->dateTimeBetween('-10 years')
            ];
        });
    }
}
