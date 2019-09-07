<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
        ]);
        $input = $request->all();
        $tags = explode(",", $request->tags);
        $article = Article::create($input);
        $article->tag($tags);
        return back()->with('success', 'Article created successfully.');
    }

    public function cari($tag){
        // return $tag;
        $article = Article::withAnyTag($tag)->get();
        return $article;
    }
}
