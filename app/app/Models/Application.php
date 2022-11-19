<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function jobAd(){
        return $this->hasOne(JobAd::class, 'id','job_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
