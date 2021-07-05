<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\like;
use Illuminate\Http\Request;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class LikeController extends Component
{


    public function Like(Request $request)
    {
        $id = Auth::id();
        $liking = like::where('user_id', $id)->where('product_id', $request->product_id)->first();

        if (!empty($liking)) {
            $likeDelete = like::where('id', $liking->id);
            $likeDelete->delete();
        } else {
            $liking = new like;
            $liking->user_id = Auth::id();
            $liking->status = 1;
            $liking->product_id = $request->product_id;
            $liking->save();
        }
        $likecontroller = new LikeController;
        return $likecontroller->countLike();
    }
    public function countLike()
    {
        $liking = like::where('product_id', session('product_id'))->count();
        if (!empty($liking)) {
            $liking;
        } else {
            $liking = 0;
        }
        return $liking;
    }
}
