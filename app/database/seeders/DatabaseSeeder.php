<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use App\Models\CV\Skill;
use App\Models\User;
use Database\Factories\SkillFactory;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            ContactSeeder::class,
            SkillSeeder::class,
            PostcodeSeeder::class
        ]);

        $creations = 50;

        User::factory($creations)->create();
        CV::factory($creations)
            ->has(CV_Contact::factory()
                ->count(1)
                ->email(), 'contacts'
            )
            ->has(CV_Contact::factory()
                ->count(1)
                ->phone(), 'contacts'
            )
            ->has(CV_Contact::factory()
                ->count(1)
                ->url(), 'contacts'
            )
            ->has(CV\Experience::factory()
                ->count(1)
                ->linked(), 'experiences'
            )
            ->create();
    }
}
