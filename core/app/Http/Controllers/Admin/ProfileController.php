<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changePassword()
    {
        $user = User::find(Auth::id());
        return view('admin.profile.change-password',['user'=>$user]);
    }

    public function storeChangePassword(ChangePasswordRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();

        if (!(Hash::check($validated['current_password'], Auth::user()->password))) {
            // The passwords match
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($validated['current_password'], $validated['new_password']) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        if(strcmp($validated['new_password'], $validated['confirm_new_password']) == 0){
            User::where('id', Auth::id())->update([
                'password' => bcrypt($validated['new_password'])
            ]);
            return redirect()->back()->with("success","Password changed successfully!");
        }

        return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");

    }
}
