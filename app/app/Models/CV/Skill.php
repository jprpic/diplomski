<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'tag_id',
        'name'
    ];
}