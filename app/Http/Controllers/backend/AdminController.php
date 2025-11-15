<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

 


    public function AdminUpdatePassword(Request $request){
         
     $request->validate([
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_new_password' => ['required', 'same:new_password'],


    ]);



        // پیدا کردن کاربر فعلی
    $admin = User::find(Auth::user()->id);

    // بررسی درستی رمز قدیمی
    if (!Hash::check($request->old_password, $admin->password)) {
        $notification = [
           'message' => 'رمز عبور فعلی مطابقت ندارد!',
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);
    }

    // بروزرسانی رمز جدید
    $admin->password = Hash::make($request->new_password);
    $admin->save();

    $notification = [
            'message' => 'رمز عبور با موفقیت بروزرسانی شد!',
        'alert-type' => 'success'
    ];

    return redirect()->back()->with($notification);


    }//end method
}
