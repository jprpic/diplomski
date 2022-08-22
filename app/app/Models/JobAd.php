<?php

namespace App\Models;

use Database\Factories\JobAdFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function auth;

class JobAd extends Model
{
    use HasFactory;

    protected $casts = [
        'skills' => 'array',
        'responsibilities' => 'array'
    ];

    const VALID_RULES = [
        'name' => 'required|max:255',
        'minAge' => 'required|numeric|min:18|max:65',
        'maxAge' => 'required|numeric|min:18|max:65',
        'minExp' => 'required|numeric|min:0|max:50',
        'maxExp' => 'required|numeric|min:0|max:50',
        'description' => 'required|min:0|max:1024',

        'skills' => 'required|distinct|array',
        'skills.*' => 'required|distinct|numeric',
        'responsibilities' => 'required|array',
        'responsibilities.*' => 'required|min:10|max:500'
    ];

    const VALID_MSGS = [
        'skills.*' => 'Potrebno je unijeti tražene vještine.'
    ];

    public function orgCv(){
        return $this->belongsTo(OrgCV::class);
    }

    protected static function newFactory()
    {
        return new JobAdFactory();
    }

    public static function store($options){
        $job = new self;
        $job->org_c_v_s_id = Auth()->user()->orgCv->id;
        $job->name = $options['name'];
        $job->description = $options['description'];
        $job->minAge = $options['minAge'];
        $job->maxAge = $options['maxAge'];
        $job->minExp = $options['minExp'];
        $job->maxExp = $options['maxExp'];
        if(isset($options['county'])){
            $job->county = $options['county'];
        }
        if(isset($options['city'])){
            $job->city = $options['city'];
        }
        $job->skills = $options['skills'];
        $job->responsibilities = $options['responsibilities'];
        $job->save();
    }
}
