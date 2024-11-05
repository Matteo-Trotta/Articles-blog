<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public function homepage()
    {
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }

    public function careers()
    {
        return view('careers');
    }


    public function careersSubmit (Request $request){

        $request->validate([
            'role'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

    }

    public static function middleware()
    {
        return
            [
                new Middleware('auth', except: ['homepage']),
            ];
    }
}
