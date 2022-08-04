<?php

namespace App\Models\CV;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $casts = [
        'results' => 'array'
    ];

    public function CV(){
        return $this->belongsTo(CV::class);
    }
}
