<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{

    public function index()
    {
      $categories = Category::all();

      return view('categories.index', compact('categories'));
    }


        public function show(Category $category)
        {

            return view('categories.show', compact('category'));
        }

        public function create()
        {
            return view('categories.create');
        }


        public function store(Category $category)
        {

            request()->validate([

              'name' => ['required', 'min:3', 'max:20']


            ]);


            Category::create(request(['id','name']));

            return redirect('/categories');
          }

          public function edit(Category $category)
          {


              return view('categories.edit', compact('category'));
          }

          public function update(Category $category)
          {
              $category->update(request(['id','name']));

              return redirect('/categories');

          }

          public function destroy(Category $category)
          {
              $category->delete();

              return redirect('/categories');

          }
}
