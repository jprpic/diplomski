<?php

namespace Database\Factories;

use App\Models\OrgCV;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrgCV>
 */
class OrgCVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(User::all()->count() - 10, User::all()->count()),
            'name' => $this->faker->company(),
            'img_url' => $this->faker->imageUrl(360, 360, 'company', true, 'profile'),
            'description' => $this->faker->paragraph(6),
            'postcode' => $this->faker->randomElement([10000, 10040, 31000, 35105, 35000, 51000]),
            'street' => $this->faker->streetAddress(),
        ];
    }

    public function configure(){
        return $this->afterCreating(function (OrgCV $OrgCV){
            // Link the newly created CV to an existing user
            $user = User::find($OrgCV['user_id']);
            $user->org_c_v_s_id = $OrgCV->id;
            $user->save();
        });
    }
}
