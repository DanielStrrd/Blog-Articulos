<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       Carbon::setLocale('es');
     }

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function($articles){
          $articles->category;
          $articles->image;
        });
        return view('front.index')->with('articles', $articles);
    }

    public function searchCategory($name) {
      $category = Category::searchCategory($name)->first();
      $articles = $category->articles()->paginate(4);
      $articles->each(function($articles){
        $articles->category;
        $articles->image;
      });
      return view('front.index')->with('articles', $articles);
    }

    public function searchTag($name) {
      $tag = Tag::searchTag($name)->first();
      $articles = $tag->articles()->paginate(4);
      $articles->each(function($articles){
        $articles->category;
        $articles->image;
      });
      return view('front.index')->with('articles', $articles);
    }

    public function viewArticle($id) {
      $article = Article::where('id','=',$id)->firstOrfail();
      $article->category;
      $article->user;
      $article->tags;
      $article->images;
      return view('front.article')->with('article', $article);
    }

}
