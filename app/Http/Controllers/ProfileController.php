<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            // Handle jika user tidak ditemukan
            return redirect()->back()->with('error', 'User not found.');
        }

        // Kirim data user ke view edit
        return view('profile.edit', compact('user'))->with('title', 'Edit Profile');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            // Handle jika user tidak ditemukan
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            // Handle jika user tidak ditemukan
            return redirect()->back()->with('error', 'User not found.');
        }

        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        $renewPassword = $request->input('renew_password');

        if (!Hash::check($currentPassword, $user->password)) {
            // Handle jika current password tidak cocok
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        if ($newPassword !== $renewPassword) {
            // Handle jika new password dan re-enter password tidak cocok
            return redirect()->back()->with('error', 'New password and re-enter password do not match.');
        }

        $user->password = Hash::make($newPassword);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
