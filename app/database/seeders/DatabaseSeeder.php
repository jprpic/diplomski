<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use App\Models\User;
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
            PostcodeSeeder::class,
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
                ->count(3)
                ->linked(), 'experiences'
            )
            ->create();

        // Factory has to be called first.
        $this->call(UserSeeder::class);
    }
}
