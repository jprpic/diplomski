<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UserController extends Controller
{
    function edit(Request $request, $id){
        $user = User::find($id);
        return Inertia::render('EditUser',[
            'propUser' => $user->toJson()
        ]);
    }

    function update(Request $request, $id) {
        $reqUser = $request->json()->all();
        $authUser = $request->user();
        $user = User::find($id);
        if(!$user){
            return redirect('dashboard');
        }

        if($authUser->user_id == $user->id || $authUser->role_id == Role::ROLE_ADMIN){
            $validator = Validator::make($reqUser, User::VALID_RULES + ['role_id' => ['required', Rule::in(1,2,3)]], User::VALID_MSGS);
            if ($validator->stopOnFirstFailure()->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            User::edit($reqUser);
            return redirect()->back()->with('status', 'Korisnik uspješno ažuriran!');
        }
        return redirect('dashboard');
    }

    function remove(Request $request, $id) {
        $user = User::find($id);
        if(!$user) {
            return response()->noContent()->setStatusCode(404);
        }
        else {
            if(isset($user->cv_id)) {
                (new CVController)->remove($request, $user->cv_id);
            } elseif(isset($user->org_c_v_s_id)) {
                (new OrgCVController)->delete($request, $user->org_c_v_s_id);
            }
            $user->delete();
            return response()->noContent()->setStatusCode(204);
        }
    }
}
