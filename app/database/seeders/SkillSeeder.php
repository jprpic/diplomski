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
            'Programming Languages',
            'Natural Language Processing (NLP)',
            'Back-End Web Development',
            'Front-End Web Development',
            'Database Management'
        ];
        $tools_and_technologies = [
            'Laravel',
            'Vue.js',
            'PHP',
            'Python (Programming Language)',
            'C',
            'Bootstrap',
            'MySQL',
            'JavaScript',
            'ASP.NET',
            'PostgreSQL',
            'NoSQL',
            'MongoDB',
            'C++',
            'C#',
            'TypeScript',
            'Tailwind CSS',
            'CSS',
            'HTML',
            'Angular',
            'React',
            'Express',
            'Svelte',
            'Java',
            'Kotlin',
            'Android Studio',
            'Node.js',
            'R (Programming Language)',
            'Carbon',
            'GoLang',
            'Dart',
            'Flutter'
        ];
        $interpersonal_skills = [
            'Analytical Skills',
            'Problem Solving',
            'Communication',
            'Cooperation',
            'Work ethics',
            'Social skills',
            'Time management',
            'Leadership',
            'Attention to details',
            'Critical thinking',
            'Self-confidence',
            'Handling pressure',
            'Decision making',
            'Negotiation',
            'Motivation',
            'Planning',
            'Adaptability'
        ];
        $other_skills = [
            'English',
            'Croatian',
            'German',
            'French',
            'Chinese'
        ];

        $this->populate($industry_knowledge, 'hard');
        $this->populate($tools_and_technologies, 'hard');
        $this->populate($interpersonal_skills, 'soft');
        $this->populate($other_skills, 'soft');
    }

    private function populate($names, $type){
        foreach($names as $name){
            $skill = new Skill();
            $skill->type = $type;
            $skill->name = $name;
            $skill->save();
        }
    }
}
