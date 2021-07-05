<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];


    protected $fillable = [
        'rating',
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function abc($id)
    {
        $Avg = Rating::all()->where('product_id', $id)->where('status', 1);
        $average = 0;
        if ($Avg) {
            $ArrRating = [];
            foreach ($Avg as $ad) {

                $ArrRating[] = $ad->rating;
            }
            $average = collect($ArrRating)->avg();
        } else {
            $average = 0;
        }
        return $average;
    }
}
