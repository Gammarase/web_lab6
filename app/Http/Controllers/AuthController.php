<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Mockery\Generator\StringManipulation\Pass\Pass;

class AuthController extends Controller
{
    public function login()
    {
        validator(request()->all(), ['email' => ['required', 'email'], 'password' => ['required']])->validate();
        if (auth()->attempt(request()->only(['email', 'password']))) {
            return redirect("/dashboard");
        } else {
            return redirect()->back()->withErrors(['email' => 'Невірний пароль або пошта']);
        }
    }

    public function registration()
    {
        validator(request()->all(), ['email' => [
            'required', 'email'],
            'name' => ['required'],
            'password' => ['required',Password::min(8)->mixedCase()->letters()->numbers()],
            'repeat_password' => ['required']])->validate();
        if (request()->input('password') != request()->input('repeat_password')) {
            return redirect()->back()->withErrors(['password' => 'Паролі не співпадають']);
        }


        try {
            $user = User::create([
                'name' => request()->input('name'),
                'email' => request()->input('email'),
                'password' => Hash::make(request()->input('password'))
            ]);
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return redirect()->back()->withErrors(['email' => "Ця пошта вже використовується"]);
            } else {
                throw $e;
            }
        }

        auth()->login($user);
        return redirect("/dashboard");
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
