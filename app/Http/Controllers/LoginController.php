<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Pickup;
use App\Models\Message;

class LoginController extends Controller
{
    public function index()
        {
           return view('login.index',[
            'title' => 'login',
           ]);
        }

    public function admin()
        {
            $pickups = Pickup::all();
            return view('admin.dashboard',[
            'pickups' => $pickups,
            'title' => 'Dashboard Admin',
           ]);
        }
        
    public function message()
        {
            $messages = Message::all();
            return view('admin.message',[
            'messages' => $messages,
            'title' => 'Dashboard Admin',
           ]);
        }
    
    public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);
        
            if(auth::attempt($credentials)){
                $request->session()->regenerate();
        
                if (auth()->user()->isAdmin()) {
                    // Jika pengguna adalah admin
                    session(['is_admin' => 'Admin']);
                    return redirect()->intended('/admin/dashboard');
                    
                } else {
                    // Jika pengguna bukan admin
                    session(['is_admin' => null]);
                    return redirect()->intended('/homepage');
                }
            }
        
            return back()->with('loginError','Login failed!');
        }
        

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
         
    }

    public function redirectToGoogle()
        {
            return Socialite::driver('google')->redirect();
        }

    public function handleGoogleCallback()
        {
            $user = Socialite::driver('google')->user();
            
            // Cek apakah email pengguna telah terdaftar dalam sistem Anda
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                // Jika email telah terdaftar, langsung login
                Auth::login($existingUser);
                return redirect()->intended('homepage');
            } else {
                // Jika email belum terdaftar, buat akun baru
                $newUser = new User();
                $newUser->Name = $user->name;
                $newUser->Email = $user->email;
                // Set password sesuai kebutuhan Anda atau biarkan kosong
                $newUser->password = bcrypt('12345');

                $newUser->save();

                Auth::login($newUser);
            }

            return redirect('/homepage'); // Ganti dengan halaman tujuan setelah login berhasil
        }

}
