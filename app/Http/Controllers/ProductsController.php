<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id);

        session(['product_id' => $id]);

        $liking = like::where('user_id', Auth::id())->where('product_id', $id)->first();

        if (!empty($liking)) {
            $statusLike = $liking->status;
        } else {
            $statusLike = null;
        }
        $likecontroller = new LikeController;
        $numblike = $likecontroller->countLike();


        return view('product', compact('product', 'liking', 'numblike'));
    }
}
