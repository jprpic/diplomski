<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const VALID_RULES = [
        'name' => 'required|max:255',
        'email' => 'required|max:255|email',
    ];
    const VALID_MSGS = [
        'name' => 'Korisničko ime je potrebno!',
        'email' => 'Provjerite format email-a!',
        'role_id' => 'Neispravna vrijednost role korisnika!'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id', 'id');
    }

    public function cv(){
        return $this->hasOne(CV::class, 'id', 'cv_id');
    }

    public function orgCv(){
        return $this->hasOne(OrgCV::class, 'id', 'org_c_v_s_id');
    }

    public static function edit($userData){
        $user = User::find($userData['id']);
        if(!$user) {
            return response()->noContent()->setStatusCode(404);
        }
        $user->name = $userData['name'];
        $user->email = $userData['email'];
        $user->role_id = $userData['role_id'];
        $user->email_verified_at = $userData['email_verified_at'];
        $user->save();
        return $user;
    }
}
