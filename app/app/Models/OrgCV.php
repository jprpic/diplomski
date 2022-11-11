<?php

namespace App\Models;

use App\Models\OrgCV\Contact_OrgCV;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgCV extends Model
{
    use HasFactory;

    const VALID_RULES = [
        'name' => 'required|max:255',
        'img_url' => 'required|url|max:500',
        'description' => 'required|max:1500',
        'street' => 'required|max:255',
        'postcode' => 'required|digits:5',

        'contacts.*.contact_id' => 'required|distinct|numeric',
        'contacts.*.value' => 'required|max:255',
    ];
    const VALID_MSGS = [
        'contacts.*.contact_id.distinct' => 'Vrsta kontakta se ponavlja!',
        'description' => 'Opis ne može sadržavati više od 1500 znakova!',
        'contacts.*.value' => 'Vrijednost kontakta ne može sadržavati više od 500 znakova!',
        'img_url' => 'URL profilne slike ne može sadržavati više od 500 znakova!',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function contacts(){
        return $this->hasMany(Contact_OrgCV::class, 'org_c_v_s_id', 'id');
    }

    public function contactInfo(){
        return $this->belongsToMany(Contact::class, 'contact__org_c_v_s', 'org_c_v_s_id', 'contact_id');
    }

    public function location()
    {
        return $this->belongsTo(Postcode::class,'postcode', 'code');
    }

    public function jobAds(){
        return $this->hasMany(JobAd::class, 'org_c_v_s_id', 'id');
    }


    public static function store($CVJson, $userId = null){

        $user_id = Auth()->id();
        if($userId){
            $user_id = $userId;
        }
        $cv = new self;
        // Create new CV
        $cv->user_id = $user_id;
        $cv->name = $CVJson['name'];
        $cv->img_url = $CVJson['img_url'];
        $cv->description = $CVJson['description'];
        $cv->street = $CVJson['street'];
        $cv->postcode = $CVJson['postcode'];
        $cv->save();

        // Link new CV to authorized user
        $user = User::find($user_id);
        $user->org_c_v_s_id = $cv->id;
        $user->save();

        // Fill in one-to-many relationships
        foreach($CVJson['contacts'] as $contact){
            $cvContact = new Contact_OrgCV;
            $cvContact->org_c_v_s_id = $cv->id;
            $cvContact->contact_id = $contact['contact_id'];
            $cvContact->value = $contact['value'];
            $cvContact->save();
        }
        return $cv;
    }

    public static function edit($CVJson, $userId = null){
        // Editing CV is deleting CV and all associated entries
        // And then recreating CV and associated entries
        $cv = OrgCV::find($CVJson['id']);
        if($cv == null){
            return;
        }

        // Unlink existing CV from current user
        $user = User::find(Auth()->id());
        $user->cv_id = null;
        $user->save();

        // Since CV is going to be deleted and all affiliated entries
        // jobAd orgCvId is going to be null and has to be reassigned
        $jobAds = $cv->jobAds;

        // Delete CV and all relationship entries
        // And create new CV
        $cv->delete();
        $cv = OrgCV::store($CVJson, $userId);

        // Reassign new OrgCvID to previously linked jobAds
        foreach($jobAds as $jobAd){
            $jobAd->org_c_v_s_id = $cv->id;
            $jobAd->save();
        }
        return $cv;
    }

    public static function getCurrentUserCV(){
        if(!Auth()->id()){
            return null;
        }
        $userID = Auth()->id();

        $cvModel = User::find($userID)->orgCv;
        if(!$cvModel){
            return null;
        }
        $cv = json_decode($cvModel);
        $cv->contacts = $cvModel->contacts;
        return json_encode($cv);
    }
}
