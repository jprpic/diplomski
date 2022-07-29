<?php

namespace App\Models\CV;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;

    public const CONTACT_PHONE = 1;
    public const CONTACT_LINKEDIN = 2;
    public const CONTACT_INSTAGRAM = 3;
    public const CONTACT_TWITTER = 4;
    public const CONTACT_FACEBOOK = 5;
}
