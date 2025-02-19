<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogInsightPage()
    {
        return view('Pages.Blog.insight');
    }

    public function blogResearchPage()
    {
        return view('Pages.Blog.research');
    }

    public function blogUpdatePage()
    {
        return view('Pages.Blog.update');
    }

    public function dtArticle()
    {
        return view('Pages.Blog.Detail.post');
    }
}
