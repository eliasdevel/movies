<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies);
    }

    public function create(Request $request)
    {
        $product = new Movie;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return response()->json($product);
    }

    public function show($id)
    {
        $product = Movie::find($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Movie::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Movie::find($id);
        $product->delete();

        return response()->json('product removed successfully');
    }
}
