<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
class AuthController extends Controller
{
    public function create_register(){


        return view('auth.register');
    }

    public function store_register(RegisterRequest $request){

        $user=User::create([
            'username'=>$request->username,
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'type'=>$request->type
        ]);
        Auth::loginUsingId($user->id);
        if ($user->type==2){
            return redirect()->route('seller_dashboard');
        }
        else {
            return redirect()->route('home');
        }




    }
    public function login(){

        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = validator::make($credentials, [
            'email' => 'required|exists:users',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => 'هناك خطا في ادخال البيانات']);
        }




        if (auth()->guard()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user=User::where('email',$request->email)->first();
            if ($user->type=1) {
                return redirect()->route('home');
            }else{
                return redirect()->route('seller_dashboard');
            }
        }

        return redirect()->back()->with(['error' => 'هناك خطا في ادخال البيانات']);
    }
    public function logout(){
        $guard=$this->getguard();
        $guard->logout();
        return redirect()->route('home');
    }
    private function getguard(){
        return auth('web');
    }

}
