<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller implements HasMiddleware
{
    //Implemento l'interface  HasMiddleware con "implements HasMiddleware"
    //Specifico che il middleware auth si applichi a tutto ad eccezzione di 'show'
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['show','index']),
        ];
    }
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {


        $path_image = '';

        if ($request->hasFile('image')) {
            $original_name = $request->file('image')->getClientOriginalName();
            $path_image =  $request->file('image')->storeAs('public/images', $original_name);
        }

        $article=Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path_image,
            'user_id' => auth()->user()->id
        ]);

        $article->categories()->attach($request->categories);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        Category::all();
        return view('articles.edit', compact('article',''));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $path_image = $request->image;

        if ($request->hasFile('image')) {
            $original_name = $request->file('image')->getClientOriginalName();
            $path_image =  $request->file('image')->storeAs('public/images', $original_name);
        }

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path_image,
        ]);
        $article->categories()->sync($request->categories);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return view('articles.edit', compact('article'));
    }
}
