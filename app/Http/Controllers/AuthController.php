<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with(['error' => 'Gagal login']);
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function regist(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required',
            'address'=> 'required',
            'phone_number'=> 'required',
            'personal_goal'=> 'required',
            'role'=> 'required',
            'image_file' => 'required'
        ]);
        
        $image_file = $this->uploadImage($request->file('image_file'));
        
        $request->merge([
            'image' => $image_file
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'personal_goal' => $request->personal_goal,
            'role' => $request->role,
            'image' => $request->image_file,
        ]);

        return back()->with('success', 'Registrasi berhasil !');
    }

    public function uploadImage($image)
    {
        $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload_image'), $new_name_image);
        return $new_name_image;
    }
}
