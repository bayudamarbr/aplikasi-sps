<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingAndReview extends Model
{
    use HasFactory;
    protected $table = 'rating_and_reviews';
    protected $fillable = [
        'user_id',
        'rating',
        'review',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
