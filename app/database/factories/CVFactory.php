<?php

namespace Database\Factories;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use App\Models\CV\CV_Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV>
 */
class CVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, User::all()->count()),
            'name' => $this->faker->name(),
            'img_url' => $this->faker->imageUrl(360, 360, 'person', true, 'profile'),
            'description' => $this->faker->paragraph(6),
            'job' => $this->faker->jobTitle(),
            'references' => $this->faker->paragraph(2),
            'postcode' => $this->faker->randomElement([10000, 10040, 31000, 35105, 35000, 51000]),
            'street' => $this->faker->streetAddress(),
            'sex' => $this->faker->randomElement(['M','F']),
            'birthdate' => $this->faker->dateTimeBetween('-50 years', '-20 years'),
            'years_of_exp' => $this->faker->randomDigit()
        ];
    }

    public function configure(){
        return $this->afterCreating(function ($CV){
            // Link the newly created CV to an existing user
            $user = User::find($CV['user_id']);
            $user->cv_id = $CV->id;
            $user->save();
            // Fill the many-to-many relationship with cv_skill table
            $randArray = range(1,CV\Skill::all()->count());
            shuffle($randArray);
            for($i = 0; $i < 20; $i++){
                $cv_skill = new CV_Skill;
                $cv_skill->cv_id = $CV->id;
                $cv_skill->skill_id = $randArray[$i];
                $cv_skill->proficiency = rand(1,5);
                $cv_skill->save();
            }
        });
    }
}
