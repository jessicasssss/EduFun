<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with('writer')->latest()->get();
        return view('pages.home', compact('articles'));
    }

    public function show($id){
        $article = Article::with('writer')->findOrFail($id);
        return view('pages.details',compact('article'));
    }

    public function category($category){
        $articles = Article::where('category', $category)->with('writer')->get();
        return view('pages.category', compact('articles'));
    }
}
