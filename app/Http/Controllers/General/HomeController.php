<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Portfolio;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $articles = Article::orderBy('id', 'desc')->take(3)->get();

        $portfolios = Portfolio::all();
        $portfolios = Portfolio::orderBy('id', 'desc')->take(6)->get();

        return view('home', compact('articles', 'portfolios'));
    }

    public function article()
    {
        $articles = Article::all();
        $articles = Article::orderBy('id', 'desc')->get();

        return view('articles', compact('articles'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $portfolios = Portfolio::orderBy('id', 'desc')->get();

        return view('portfolios', compact('portfolios'));
    }

    public function about()
    {

        return view('about');
    }
    
    public function showArticle($id)
    {
        $articles = Article::find($id);
        return view('viewArticle', compact('articles'));
    }

    public function showPortfolio($id)
    {
        $portfolios = Portfolio::find($id);
        return view('viewPortfolio', compact('portfolios'));
    }
}
