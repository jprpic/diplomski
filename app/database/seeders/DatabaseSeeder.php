<?php

namespace Database\Seeders;

use App\Models\CV;
use App\Models\CV\CV_Contact;
use App\Models\JobAd;
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

        $employeeCount = 40;

        User::factory($employeeCount)->create();
        // $creations of users, but only last 10 are companies
        CV::factory($employeeCount)
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

        $companyCount = 10;

        User::factory($companyCount)->company()->create();
        // Last 10 users are company users
        OrgCV::factory($companyCount)
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
            ->has(JobAd::factory()
                ->count(5)
                ->linked(), 'jobAds'
            )
            ->create();
        // User factory has to be called first.
        $this->call(UserSeeder::class);
    }
}
