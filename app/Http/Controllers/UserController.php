<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{    
    /**
     * Method for showing login view
     *
     * @return \Illuminate\View\View
     */
    public function login(): \Illuminate\View\View
    {
        return view('user/login');
    }
    
    /**
     * Method for authenticating the user
     *
     * @param Request $request [explicite description]
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $formFields = $request->validate([
            'email' => "required|email",
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
