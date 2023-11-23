<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function indexforHomepage(){
        return view('/homepage', [
            "reviews" => Review::all()
        ]);
    }

    // public function getUserData(){
    //     return view('/homepage', [
    //         "user" => User::all()
    //     ]);
    // }

    // public function show(Post $post){
    //     return view('hotel-page', [
    //         "reviews" => Review::find($slug)
    //     ]);
    // }
}
