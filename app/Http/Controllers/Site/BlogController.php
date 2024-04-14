<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function displayBlog()
    {
        $data=[
            'blogs'=>Blog::all(),
        ];
        return view('site.pages.blog',$data);
    }

    public function displayBlogDetails($slug)
    {
        $data=[
            'blog'=>Blog::where('slug',$slug)->first(),
            'blogs'=>Blog::all(),
        ];
        return view('site.pages.blogDetail',$data);
    }
}
