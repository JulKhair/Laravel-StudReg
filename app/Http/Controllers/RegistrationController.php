<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show homepage
    public function home(): View
    {
        return view('home');
    }

    // Show registration form
    public function showForm(): View
    {
        return view('register');
    }

    // Handle form submission
    public function submitForm(Request $request): View
    {
        $validated = $request->validate([
            'full_name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'age' => 'required|integer|min:18|max:100',
            'course' => 'required',
        ]);

        return view('success', [
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'age' => $validated['age'],
            'course' => $validated['course'],
        ]);
    }
}
