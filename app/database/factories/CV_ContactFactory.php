<?php

namespace Database\Factories;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CV_ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = CV_Contact::class;
    public function definition()
    {
        return [
        ];
    }

    public function email(){
        return $this->state(function (array $attributes, CV $CV){
            return [
                'contact_id' => 1,
                'cv_id' => $CV->id,
                'value' => $this->faker->email()
            ];
        });
    }

    public function phone(){
        return $this->state(function (array $attributes, CV $CV){
            return [
                'contact_id' => 2,
                'cv_id' => $CV->id,
                'value' => $this->faker->tollFreePhoneNumber()
            ];
        });
    }

    public function url(){
        return $this->state(function (array $attributes, CV $CV){
            return [
                'contact_id' => $this->faker->numberBetween(3,5),
                'cv_id' => $CV->id,
                'value' => $this->faker->url()
            ];
        });
    }
}
