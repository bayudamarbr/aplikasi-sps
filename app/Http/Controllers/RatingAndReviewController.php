<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingAndReview;
use App\Models\User;

class RatingAndReviewController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'user_id' => 'required',
        'star' => 'required',
        'review' => 'string',
    ]);

    $user = $request->user();

    // Cek apakah sudah ada rating dan review dari user yang sedang digunakan
    $ratingReview = RatingAndReview::where('user_id', $user->id)->first();

    if ($ratingReview) {
        // Jika sudah ada, lakukan pembaruan data
        $ratingReview->rating = $request->star;
        $ratingReview->review = $request->review;
        $ratingReview->save();
    } else {
        // Jika belum ada, tambahkan data baru
        $ratingReview = new RatingAndReview();
        $ratingReview->user_id = $user->id;
        $ratingReview->rating = $request->star;
        $ratingReview->review = $request->review;
        $ratingReview->save();
    }

    // Redirect atau melakukan tindakan lainnya setelah penyimpanan berhasil
    // ...

    return redirect()->route('homepage')->with('success', 'Rating and review berhasil disimpan.');
}

}
