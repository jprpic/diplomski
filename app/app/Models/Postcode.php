<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'code';

    public function cvs(){
        return $this->hasMany(CV::class);
    }

}
