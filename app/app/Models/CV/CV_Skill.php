<?php

namespace App\Models\CV;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV_Skill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'cv_skill';
    public function CV(){
        return $this->belongsTo(CV::class);
    }
    public function skill(){
        return $this->belongsTo(Skill::class);
    }
}
