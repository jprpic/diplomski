<?php

namespace Database\Seeders;

use App\Models\CV\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = 'Industry Knowledge';
        $tag->skill_type = 'hard';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Tools and Technologies';
        $tag->skill_type = 'hard';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Interpersonal Skills';
        $tag->skill_type = 'soft';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Other Skills';
        $tag->skill_type = 'soft';
        $tag->save();
    }
}
