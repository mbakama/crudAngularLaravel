<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $all = Post::all();

        if ($all) {
            return response()->json(
                [
                    "statut"=>201,
                    "data"=>$all
                ]
            );
        } else {
            return response()->json(
                [
                    "status"=>"il ny a rien"
                ]
            );
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = new Post;

        $val->titre = $request->titre;
        $val->contenu = $request->contenu;

        $val->save();

        return response()->json(
            [
                "statut",200
            ],200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
