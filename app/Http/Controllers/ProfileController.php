<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(User $user, Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'old_password' => 'nullable|required_with:new_password|string',
            'new_password' => [
                'nullable',
                'required_with:old_password',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
                'different:old_password'
            ],
        ]);

        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->birthdate = $request->get('birthdate');

        if ($request->filled('old_password') && $request->filled('new_password')) {
            if (Hash::check($request->get('old_password'), $user->password)) {
                $user->password = Hash::make($request->get('new_password'));
            } else {
                return back()->withErrors([
                    'old_password' => 'The provided credentials do not match our records.',
                ]);
            }
        }

        $user->save();

        return redirect()->to('/?action=profile');
    }
}
