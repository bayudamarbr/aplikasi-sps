<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\RatingAndReview;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $ratingReviews = RatingAndReview::all();
    
        return view('homepage', [
            'title' => 'Homepage',
            'user' => $user,
            'ratingReviews' => $ratingReviews
        ]);
    }
    

    public function about()
    {
        $user = Auth::user();
        return view('about', [
            'title' => 'About Us',
            'user' => $user
        ]);
    }

    public function sampah()
    {
        $user = Auth::user();
        return view('sampah', [
            'title' => 'Jenis Sampah',
            'user' => $user
        ]);
    }
    
    
}

