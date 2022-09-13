<?php

namespace Database\Factories;

use App\Models\CV\Skill;
use App\Models\OrgCV;
use App\Models\Postcode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobAdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function linked()
    {
        return $this->state(function (array $attributes, OrgCV $CV) {
            $minExp = $this->faker->numberBetween(0, 5);
            $code = $this->faker->randomElement([10000, 10040, 31000, 35105, 35000, 51000]);
            $location = Postcode::find($code);
            return [
                'org_c_v_s_id' => $CV->id,
                'name' => $this->faker->jobTitle(),
                'minAge' => $this->faker->numberBetween(18, 30),
                'maxAge' => $this->faker->numberBetween(30, 60),
                'minExp' => $minExp,
                'maxExp' => $this->faker->numberBetween($minExp, $minExp + 5),
                'county' => $location->county,
                'skills' => array_column($this->faker->unique(true)->randomElements(Skill::all(['id']), 5), 'id'),
                'description' => $this->faker->sentences(10,true),
                'responsibilities' => [$this->faker->sentences(3,true),
                    $this->faker->sentences(3,true),
                    $this->faker->sentences(3,true),
                    $this->faker->sentences(3,true),
                    $this->faker->sentences(3,true),
                ],
            ];
        });
    }
}
