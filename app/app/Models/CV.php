<?php

namespace App\Models;

use App\Models\CV\CV_Contact;
use App\Models\CV\CV_Skill;
use App\Models\CV\Experience;
use App\Models\CV\Skill;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $table = 'cvs';

    public function skillProficiencies(){
        return $this->hasMany(CV_Skill::class , 'cv_id', 'id');
    }
    public function experiences(){
        return $this->hasMany(Experience::class, 'cv_id', 'id');
    }
    public function contacts(){
        return $this->hasMany(CV_Contact::class, 'cv_id', 'id');
    }
    public function skills(){
        return $this->belongsToMany(Skill::class);
    }

    public static function getCurrentUser(){
        if(!Auth()->id()){
            return null;
        }
        $userID = Auth()->id();
        $cvModel = self::find($userID);
        $cv = json_decode($cvModel);
        $cv->contacts = $cvModel->contacts;
        $cv->experiences = $cvModel->experiences;
        $cv->skills = $cvModel->skillProficiencies;
        $cv = json_encode($cv);
        return $cv;
    }

    public static function store($CVJson){
        $user_id = Auth()->id();

        $cv = new self;
        $cv->user_id = $user_id;
        $cv->name = $CVJson['name'];
        $cv->description = $CVJson['description'];
        $cv->address = $CVJson['address'];
        $cv->job = $CVJson['job'];
        $cv->references = $CVJson['references'];
        $cv->save();

        foreach($CVJson['contacts'] as $contact){
            $cvContact = new CV_Contact;
            $cvContact->cv_id = $cv->id;
            $cvContact->contact_id = $contact['id'];
            $cvContact->value = $contact['value'];
            $cvContact->save();
        }

        foreach($CVJson['experiences'] as $experience){
            $cvExperience = new Experience;

            $cvExperience->cv_id = $cv->id;
            $cvExperience->type = $experience['type'];
            $cvExperience->name = $experience['name'];
            $cvExperience->source = $experience['source'];
            $cvExperience->results = $experience['results'];

            $started_at= new DateTime("{$experience['started_at']['year']}-{$experience['started_at']['month']}-01");
            $cvExperience->started_at = $started_at;

            if($experience['finished_at']['month']){
                $finished_at = new DateTime("{$experience['finished_at']['year']}-{$experience['finished_at']['month']}-01");
                $cvExperience->finished_at = $finished_at;
            }

            $cvExperience->save();
        }

        foreach($CVJson['skills'] as $skill){
            $cvSkill = new CV_Skill;
            $cvSkill->cv_id = $cv->id;
            $cvSkill->skill_id = $skill['id'];
            $cvSkill->proficiency = $skill['proficiency'];
            $cvSkill->save();
        }

        // TODO complete cv creation with foreign keys too
        dd($cv);
    }
}
