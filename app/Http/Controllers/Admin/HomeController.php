<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public  function index()
    {
        return view('admin.home');
    }

    public function logOut(){
        Auth::guard('admins')->logout();
        return redirect()->route('Admin.LogIn');
    }
}
