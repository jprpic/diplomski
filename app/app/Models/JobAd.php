<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAd extends Model
{
    use HasFactory;

    protected $casts = [
        'skills' => 'array'
    ];

    const VALID_RULES = [
        'name' => 'required|max:255',
        'minAge' => 'required|numeric|min:18|max:65',
        'maxAge' => 'required|numeric|min:18|max:65',
        'minExp' => 'required|numeric|min:0|max:50',
        'maxExp' => 'required|numeric|min:0|max:50',

        'skills' => 'required|distinct|array',
        'skills.*' => 'required|distinct|numeric'
    ];

    const VALID_MSGS = [
        'skills.*' => 'Potrebno je unijeti tražene vještine.'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function store($options){
        $job = new JobAd;
        $job->user_id = auth()->id();
        $job->name = $options['name'];
        $job->minAge = $options['minAge'];
        $job->maxAge = $options['maxAge'];
        $job->minExp = $options['minExp'];
        $job->maxExp = $options['maxExp'];
        if(isset($options->county)){
            $job->county = $options['county'];
        }
        if(isset($options->city)){
            $job->city = $options['city'];
        }
        $job->skills = $options['skills'];
        $job->save();
    }
}
