<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

use App\Article;


class PagesController extends Controller
{
    //Index Page
    public function index()
    {
		return view('index');
    }
    
    
    //About us Page
    public function about()
    {
        return view('about');
    }
    
    //Blog Page
    public function blog()
    {
        $articles = Article::where('status', 'on')->get();
        return view('blog', compact('articles'));
    }
    
	 //Service Page
    public function service()
    {
        return view('service');
    }
	
	//Services Page
    public function services()
    {
        return view('services');
    }
	
	//Article Page
    public function article()
    {
        return view('article');
    }
	
	 //Contact Page
    public function contact()
    {
        return view('contact');
    }
	
}
