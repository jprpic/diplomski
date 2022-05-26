<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'skill_type'
    ];

    public const TAG_INDUSTRY_KNOWLEDGE = 1;
    public const TAG_TOOLS_AND_TECHNOLOGIES = 2;
    public const TAG_INTERPERSONAL_SKILLS = 3;
    public const TAG_OTHER_SKILLS = 4;
}
