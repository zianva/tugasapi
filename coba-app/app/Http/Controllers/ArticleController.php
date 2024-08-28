<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    /**
     * Mendapatkan Artikel
     */
    public function show(string $id)
    {
        return
        Article::findOrFail($id);
    }

    /**
     * Memperbarui Artikel
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    /**
     * Menghapus Artikel
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}