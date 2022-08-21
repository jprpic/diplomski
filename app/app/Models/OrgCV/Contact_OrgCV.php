<?php

namespace App\Models\OrgCV;

use App\Models\Contact;
use App\Models\OrgCV;
use Database\Factories\OrgCV_ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_OrgCV extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function orgCV(){
        return $this->belongsTo(OrgCV::class);
    }
    public function contact(){
        return $this->belongsTo(Contact::class);
    }

    protected static function newFactory()
    {
        return new OrgCV_ContactFactory();
    }
}
