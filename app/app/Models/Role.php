<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;

    public const ROLE_EMPLOYEE = 1;
    public const ROLE_ORGANIZATION = 2;
    public const ROLE_ADMIN = 3;

    public function users(){
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
