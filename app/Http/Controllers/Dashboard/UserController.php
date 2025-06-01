<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::get();
        return view('dashboard.users.index',compact('users'));

    }
    public function destroy($id)
    {

        $user=User::find($id);
        if(!$user){
            return redirect()->route('categories.index')->with(['error' => 'user not found']);
        }
        // magic method to delete path of image
        $user->delete();


        return redirect()->back()->with(['success' => 'Delete success']);



    }
}
