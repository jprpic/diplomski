<?php

namespace App\Models\CV;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'type',
        'name'
    ];

    public function cvs(){
        return $this->belongsToMany(CV::Class);
    }
}
