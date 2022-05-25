<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;

    public const ROLE_EMPLOYEE = 1;
    public const ROLE_EMPLOYER = 2;
    public const ROLE_ADMIN = 3;
}
