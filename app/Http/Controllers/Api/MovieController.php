<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Liste;  
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fix: withCount() is for counting, use with() to load relationships
        $movies = Movie::with('liste', 'categorie')->get();
        return response()->json([
            'status' => 'success',
            'data'   => $movies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movie->load('liste', 'categorie');
        return response()->json([
            'status' => 'success',
            'data'   => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'liste_id' => 'numeric',
        ]);

        $movie->update($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Movie liste mise à jour',
            'data'    => $movie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {

        $movie->update(['liste_id' => null]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Movie is not in any liste',
        ]);
    }
}
