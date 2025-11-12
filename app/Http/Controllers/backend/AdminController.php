<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function Adminlogout(Request $request){
 

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    }//end metod



    public function AdminEditProfile(){


        $admin = User::find(Auth::user()->id);

        return view('admin.pages.edit_profile' , compact('admin'));



    }

 
}
