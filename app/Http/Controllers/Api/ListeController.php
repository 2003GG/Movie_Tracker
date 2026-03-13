<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Liste;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes=Liste::withCount('Movies')->get();
        return response()->json([
            'status'=>'success',
            'data'=>$listes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required|string|max:255',
        ]);
        $liste=Liste::create($validate);
        return response()->json([
            'status'  => 'success',
            'message' => 'Liste créée avec succès',
            'data'=>$liste
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Liste $liste)
    {
         $liste->load('Movies');
        return response()->json([
            'status' => 'success',
            'data'   => $liste
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Liste $liste)
    {
        $validate=$request->validate([
            'name'=>'sometimes|required|string|max:255'
        ]);
        $liste->update($validate);
        return response()->json([
            'status'=>'success',
            'message'=>'Liste mise à jour',
            'data'=>$liste
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liste $liste)
    {
        $liste->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'liste supprimée'
        ]);
    }
}
