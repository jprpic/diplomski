<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use App\Models\OrgCV;
use App\Models\OrgCV\Contact_OrgCV;
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
        // $creations of users, but only last 10 are companies
        CV::factory($creations - 10)
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

        // Last 10 users are company users
        OrgCV::factory(10)
            ->has(Contact_OrgCV::factory()
                ->count(1)
                ->email(), 'contacts'
            )
            ->has(Contact_OrgCV::factory()
                ->count(1)
                ->phone(), 'contacts'
            )
            ->has(Contact_OrgCV::factory()
                ->count(1)
                ->url(), 'contacts'
            )
            ->create();
        // User factory has to be called first.
        $this->call(UserSeeder::class);
    }
}
