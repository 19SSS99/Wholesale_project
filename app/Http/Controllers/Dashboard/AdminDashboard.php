<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index(){

        // $setting=General_setting::find(1);

        return view('dashboard.admin');
    }
}
