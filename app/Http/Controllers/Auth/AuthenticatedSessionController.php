<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
   

public function store(LoginRequest $request): RedirectResponse
{
    // Authenticate the user
    $request->authenticate();

    // Regenerate the session to prevent session fixation attacks
    $request->session()->regenerate();

    // Check if the user is an admin
    if (Auth::user()->usertype === 'admin') {
        // Redirect to the admin dashboard
        return redirect()->route('admin.dashboard');
    }

    // Redirect to the intended page or a default home route if the user is not an admin
    return redirect()->intended(route('dashboard'));
}



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
