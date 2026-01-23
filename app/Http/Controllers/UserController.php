<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function profilePage()
    {
        $users = User::find(auth()->user()->id);
        $percentage = User::calculate_profile($users);
        return view('profile.profile',compact('users','percentage'));
    }

    public function updateUserDetails(Request $request)
    {
        $validate = Validator::make(request()->all(),[
            'name' => 'required',
            'email' => 'required',
            'passwordNow' => 'required',
            'password' => 'required|min:6',
            'rePassword' => 'required|min:6',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $user = User::find(auth()->user()->id);

        if (Hash::check($request->passwordNow, auth()->user()->password)) {
            if(request('password') == request('rePassword'))
            {
                $user->name = request('name');
                $user->email =request('email');
                $user->password = Hash::make(request('password'));
                $user->save();
            }else {
                return redirect()->back()->withErrors('Passwords are not matching!');
            }
        }else{
            return redirect()->back()->withErrors('Current passwords is invalid!');
        }
        return redirect()->to('/admin/get-profile-page');
    }
}
