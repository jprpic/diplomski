<?php

namespace Database\Factories;

use App\Models\OrgCV;
use App\Models\OrgCV\Contact_OrgCV;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrgCV_ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contact_OrgCV::class;
    public function definition()
    {
        return [
        ];
    }

    public function email(){
        return $this->state(function (array $attributes, OrgCV $CV){
            return [
                'contact_id' => 1,
                'org_c_v_s_id' => $CV->id,
                'value' => $this->faker->email()
            ];
        });
    }

    public function phone(){
        return $this->state(function (array $attributes, OrgCV $CV){
            return [
                'contact_id' => 2,
                'org_c_v_s_id' => $CV->id,
                'value' => $this->faker->tollFreePhoneNumber()
            ];
        });
    }

    public function url(){
        return $this->state(function (array $attributes, OrgCV $CV){
            return [
                'contact_id' => $this->faker->numberBetween(3,5),
                'org_c_v_s_id' => $CV->id,
                'value' => $this->faker->url()
            ];
        });
    }
}
