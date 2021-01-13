<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;


class RatingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $rating = Rating::all();

        return response()->json($rating);
    }

    public function create(Request $request)
    {
        $rating = new Rating;
        var_dump($request->input('movie_id'));
        $rating->movie_id = $request->input('movie_id');
        $rating->rating = $request->input('rating');
        $rating->save();

        return response()->json($rating);
    }

    public function show($id)
    {
        $rating = Rating::find($id);

        return response()->json($rating);
    }

    public function update(Request $request, $id)
    {
        $rating = Rating::find($id);

        $rating->movie_id = $request->input('movie_id');
        $rating->rating = $request->input('rating');
        $rating->save();
        return response()->json($rating);
    }

    public function destroy($id)
    {
        $rating = Rating::find($id);
        $rating->delete();
        return response()->json('rating removed successfully');
    }
}
