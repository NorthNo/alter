<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token = null)
    {
        return view('main/auth/reset')->with(
            ['token' => $token,
            'email' => $request->email
            ]
        );
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        $response = Password::broker()->reset(
            $request->only('email', 'password', 'password_confirmation'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Şifre başarıyla sıfırlandı.')
            : back()->withErrors(['email' => 'E-posta adresi ile eşleşen bir kullanıcı bulunamadı.']);
    }

}
