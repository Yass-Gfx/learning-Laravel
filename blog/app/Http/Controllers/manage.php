<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class manage extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddArticle(Request $request)
    {
        if ($request->isMethod('post')) {
            $ar = new Article();
            $ar->title = $request->input('title');
            $ar->body = $request->input('body');
            $ar->user_id = Auth::user()->id;
            $ar->save();

            return redirect('view');
        }

        return view('manage.AddArticle');
    }

    public function view()
    {
        $articles = Article::all();
        $arr = array('articles' => $articles);

        return view('manage.view', $arr);

    }

    public function read(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $arg = new Comment();
            $arg->body = $request->input('body');
            $arg->article_id = $id;
            $arg->save();
            //return redirect('view');


        }

        $article = Article::find($id);
        $readAr = ['article' => $article];

        return view('manage.read', $readAr);
    }
}
