<?php

namespace Database\Seeders;

use App\Models\CV\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industry_knowledge = [
            'Computer Science',
            'Data Science',
            'Engineering',
            'Artificial Intelligence (AI)',
            'Object-Oriented Programming (OOP)',
            'Machine Learning',
            'Computer Vision',
            'Training',
            'Programming Languages',
            'Natural Language Processing (NLP)',
            'Back-End Web Development'
        ];
        $tools_and_technologies = [
            'Laravel',
            'Vue.js',
            'PHP',
            'Python (Programming Language)',
            'C',
            'Bootstrap',
            'MySQL',
            'Javascript'
        ];
        $interpersonal_skills = [
            'Analytical Skills',
            'Problem Solving',
            'Communication'
        ];
        $other_skills = [
            'English',
            'Croatian',
            'German'
        ];

        $this->massPopulate($industry_knowledge, 1);
        $this->massPopulate($tools_and_technologies, 2);
        $this->massPopulate($interpersonal_skills, 3);
        $this->massPopulate($other_skills, 4);
    }

    private function massPopulate($names, $tag_id){
        foreach($names as $name){
            $skill = new Skill();
            $skill->tag_id = $tag_id;
            $skill->name = $name;
            $skill->save();
        }
    }
}
