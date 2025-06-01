<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile()
    {

        $user = Admin::find(auth('admin')->user()->id);

        return view('dashboard.edit_profile', compact('user'));

    }

    public function updateProfile(ProfileRequest $request)
    {
        //validate
        // db

        try {

            $admin = Admin::find(auth('admin')->user()->id);

            if($request->has('password')) {
                if ($request->filled('password')) {
                    $request->merge(['password' => bcrypt($request->password)]);
                }
            }

            unset($request['id']);
            unset($request['password_confirmation']);

            $admin->update($request->all());

            return redirect()->back()->with(['success' => 'update success']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'There is error try in later']);

        }

    }
}
