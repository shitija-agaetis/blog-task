<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favourite()
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            $favoriteCategories = $user->favoriteCategories()->get();
            
            return view('category.favourite', compact('favoriteCategories'));
        }

        return redirect()->route('login')->with('error', 'You need to login first.');
    }

    public function addFavorite(Request $request, $categoryId)
{
    $user = Auth::user();
    $user->favoriteCategories()->attach($categoryId);

    if ($request->ajax()) {
        return response()->json(['status' => 'Category added to favorites.']);
    }

    return redirect()->back()->with('status', 'Category added to favorites.');
}


    public function removeFavorite(Request $request, $categoryId)
{
    $user = Auth::user();
    $user->favoriteCategories()->detach($categoryId);

    if ($request->ajax()) {
        return response()->jshvon(['status' => 'Category removed from favorites.']);
    }

    return redirect()->back()->with('status', 'Category removed from favorites.');
}

}
