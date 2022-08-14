<?php

namespace App\Models\CV;

use App\Models\CV;
use Database\Factories\CV_ContactFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV_Contact extends Model
{
    use HasFactory;

    protected $table = 'contact_cv';
    public $timestamps = false;

    public function CV(){
        return $this->belongsTo(CV::class);
    }
    public function contact(){
        return $this->belongsTo(Contact::class);
    }

    protected static function newFactory()
    {
        return new CV_ContactFactory();
    }
}
