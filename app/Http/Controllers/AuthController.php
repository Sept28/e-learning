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

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'personal_goal' => $request->personal_goal,
            'role' => $request->role,
            'image' => $request->image,
        ]);
    }
}
