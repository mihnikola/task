<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
      $articles = Article::all();

      return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }


    public function store(Article $article)
    {

        request()->validate([
          'id' => ['required', 'min:3', 'max:20'],
          'category_name' => ['required', 'min:3', 'max:20'],
          'name' => ['required', 'min:3', 'max:20'],
          'description' => ['required', 'min:20', 'max:200'],
          'price' => ['required', 'min:1', 'max:10']


        ]);


        Article::create(request(['id','category_name', 'name', 'description', 'price']));

        return redirect('/articles');
      }

    public function edit(Article $article)
    {


        return view('articles.edit', compact('article'));
    }


    public function update(Article $article)
    {
        $article->update(request(['id','category_name', 'name', 'description', 'price']));

        return redirect('/articles');

    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');

    }
}
