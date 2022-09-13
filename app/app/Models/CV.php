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

    const VALID_RULES = [
        'name' => 'required|max:255',
        'img_url' => 'required|url',
        'sex' => 'required|alpha|size:1',
        'birthdate' => 'required|date',
        'years_of_exp' => 'required|min:0|max:50|numeric',
        'description' => 'required|max:255',
        'street' => 'required|max:255',
        'postcode' => 'required|digits:5',
        'job' => 'required|max:255',
        'references' => 'required|max:255',

        'contacts.*.contact_id' => 'required|distinct|numeric',
        'contacts.*.value' => 'required|max:255',

        'experiences.*.name' => 'required|max:255',
        'experiences.*.source' => 'required|max:255',
        'experiences.*.type' => 'required|alpha',
        'experiences.*.results.*' => 'required|max:255',
        'experiences.*.started_at' => 'required|date',

        'skills.*.skill_id' => 'required|distinct|numeric',
        'skills.*.proficiency' => 'required|numeric'
    ];
    const VALID_MSGS = [
        'contacts.*.contact_id.distinct' => 'There is a repeating type of contact.',
        'skills.*.skill_id.distinct' => 'There is a same skill repeating.',
        'skills.*.skill_id.required' => 'Please choose an existing skill.',
    ];

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
        return $this->belongsToMany(Skill::class, 'cv_skill', 'cv_id', 'skill_id');
    }
    public function contactInfo(){
        return $this->belongsToMany(Contact::class, 'contact_cv', 'cv_id', 'contact_id');
    }

    public function location()
    {
        return $this->belongsTo(Postcode::class,'postcode', 'code');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function age(){
        return $this->birthdate;
    }

    public static function getCurrentUserCV(){
        if(!Auth()->id()){
            return null;
        }
        $userID = Auth()->id();

        $cvModel = User::find($userID)->cv;
        if(!$cvModel){
            return null;
        }
        $cv = json_decode($cvModel);
        $cv->contacts = $cvModel->contacts;
        $cv->experiences = $cvModel->experiences;
        $cv->skills = $cvModel->skillProficiencies;
        return json_encode($cv);
    }

    public static function edit($CVJson){
        // Editing CV is deleting CV and all associated entries
        // And then recreating CV and associated entries
        $cv = CV::find($CVJson['id']);
        if($cv == null){
            return;
        }

        // Unlink existing CV from current user
        $user = User::find(Auth()->id());
        $user->cv_id = null;
        $user->save();

        // Delete CV and all relationship entries
        // And create new CV
        $cv->delete();
        CV::store($CVJson);
    }

    public static function store($CVJson){
        $user_id = Auth()->id();
        $cv = new self;
        // Create new CV
        $cv->user_id = $user_id;
        $cv->name = $CVJson['name'];
        $cv->img_url = $CVJson['img_url'];
        $cv->description = $CVJson['description'];
        $cv->street = $CVJson['street'];
        $cv->postcode = $CVJson['postcode'];
        $cv->sex = $CVJson['sex'];
        $cv->birthdate = new DateTime("{$CVJson['birthdate']}");
        $cv->years_of_exp = $CVJson['years_of_exp'];
        $cv->job = $CVJson['job'];
        $cv->references = $CVJson['references'];
        $cv->save();

        // Link new CV to authorized user
        $user = User::find($user_id);
        $user->cv_id = $cv->id;
        $user->save();

        // Fill in one-to-many relationships
        foreach($CVJson['contacts'] as $contact){
            $cvContact = new CV_Contact;
            $cvContact->cv_id = $cv->id;
            $cvContact->contact_id = $contact['contact_id'];
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

            $started_at= new DateTime("{$experience['started_at']}");
            $cvExperience->started_at = $started_at;

            if($experience['finished_at']){
                $finished_at = new DateTime("{$experience['finished_at']}");
                $cvExperience->finished_at = $finished_at;
            }

            $cvExperience->save();
        }

        foreach($CVJson['skills'] as $skill){
            $cvSkill = new CV_Skill;
            $cvSkill->cv_id = $cv->id;
            $cvSkill->skill_id = $skill['skill_id'];
            $cvSkill->proficiency = $skill['proficiency'];
            $cvSkill->save();
        }
    }
}
