<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Faq;
use App\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');

        $portfolio_records = Portfolio::where('status','active')->get();

        $faq_records = Faq::orderBy('id','DESC');

        $latest_news = Blog::orderBy('created_at','DESC')->take(3)->get();

        return view('front.index',compact('latest_news','faq_records','portfolio_records'));
    }

    public function about()
    {


        return view('front.about');
    }

    public function contact()
    {
        $setting = setting();
        return view('front.contact',compact('setting'));
    }

    public function services()
    {


        return view('front.services');
    }

    public function reservation()
    {


        return view('front.reservation');
    }

    public function blogs()
    {


        return view('front.blog');
    }

    public function single_blog()
    {


        return view('front.blog-details');
    }
}
