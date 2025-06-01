<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function login(){
        //$setting=General_setting::find(1);
        return view('dashboard.login');
    }
    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = validator::make($credentials, [
            'email' => 'required|exists:admins',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => 'There is error']);
        }

        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('admin_dashboard');
        }
        return redirect()->back()->with(['error' => 'There is error in enter data']);
    }

    public function logout(){
        $guard=$this->getguard();
        $guard->logout();
        return redirect()->route('login.admin');
    }
    private function getguard(){
        return auth('admin');
    }
}
