<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Home;
use App\Models\admin\About;
use App\Models\admin\Education;
use App\Models\admin\PortCategory;

class FrontController extends Controller
{
    public function index()
    {
        $home = Home::orderBy('id', 'desc')->first();
        $about = About::orderBy('id', 'desc')->first();
        $educations = Education::orderBy('id', 'asc')->take(6)->get();
        $port_categories = PortCategory::orderBy('id', 'asc')->take(6)->get();
        return view('front.index',compact('home','about','educations','port_categories'));
    }

    public function showBlog($id)
    {
        // $blog = Blog::findOrFail($id);
        $blog = "";
        return view('front.blog.blog', compact('blog'));
    }
}
