<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy("created_at", "DESC")->paginate(3);

        return  view('article.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', ['article' => $article]);
    }
}
