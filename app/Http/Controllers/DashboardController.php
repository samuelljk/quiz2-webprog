<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function getUserDataReview()
    {
        $user = Auth::user();

        if ($user) {
            return view('dashboard.index', [
                'user' => $user,
                'reviews' => $user->review
            ]);
        }

        return redirect('/login');
    }

    public function updateUserData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email:dns'],
            'number' => 'required|string',
        ]);

        User::where('id', auth()->id())->update([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'number' => $validatedData['number'],
        ]);

        return redirect('/dashboard');

    }
}
