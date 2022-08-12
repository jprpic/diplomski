<?php

namespace App\Models\CV;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV_Skill extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'cv_skill';
    public function CV(){
        return $this->belongsTo(CV::class, 'cv_id', 'id');
    }
    public function skill(){
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }

}
