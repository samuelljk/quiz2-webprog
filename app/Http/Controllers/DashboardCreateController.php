<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Review;

class DashboardCreateController extends Controller
{
    public function index()
    {
        return view('dashboard.create.index');
    }

    public function getHotel()
    {
        return view('dashboard.create.index', ['hotels' => Hotel::all()]);
    }

    public function createReview(Request $request)
    {
        $validatedData = $request->validate([
            'hotel' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'text' => 'required|string',
        ]);

        // Retrieve the hotel_id based on the selected hotel
        $hotelId = Hotel::where('slug', $validatedData['hotel'])->first()->id;
        $userId = auth()->id();

        $review = new Review();
        $review->hotel_id = $hotelId; // Set the hotel_id
        $review->rating = $validatedData['rating'];
        $review->content = $validatedData['text'];
        $review->user_id = $userId;
        // Set other review fields as needed
        $review->save();

        // Redirect to a thank you page or wherever you want after successful submission
        return redirect('/dashboard');
    }

}
