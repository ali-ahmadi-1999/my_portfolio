<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
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
    }//end metod


    public function AdminUpdateProfile(Request $request){

        // $admin = User::findOrFail(Auth::id());

        $id = Auth::user()->id;
        $admin = User::findOrFail($id);
        $admin->username = $request->username;
        $admin->email = $request->email;
        // $admin->created_at = Carbon::now();


        if($request->hasFile('profile_image')){
              

    // if($admin->photo && file_exists(public_path($admin->photo))){
    //     unlink(public_path($admin->photo));
    // }


            unlink(public_path($admin->photo));
            $file = $request->file('profile_image');
            $imageName = "admin_".hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/admin'), $imageName);
            $imagePath = 'uploads/admin/'.$imageName;
            $admin->photo = $imagePath;


        }

    
        $admin->save();

           $notification = [
           
            'message' => 'پروفایل ویرایش  شد ',
            'alert-type'=>'info'

        ];

        return redirect()->back()->with($notification);


    }//end method



    public function AdminChangeProfile(){

        return view('admin.pages.change_password');

    }//end method

 
}
