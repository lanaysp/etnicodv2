<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sosial;
use App\Blogcategory;
use App\Blog;

use Illuminate\Support\Facades\DB;

class BlogcategoryController extends Controller
{
    public function index()
    {
        $blogcategories = Blogcategory::all();
        $blog = Blog::take(12)->get();

        return view('pages.blogcategory',[
            'blogcategories' => $blogcategories,
            'blog' => $blog,
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $blog = Blog::with(['blogcategory'])
                    ->where('name', 'like', "%".$cari."%")
                    ->get();

        $blogcategories = Blogcategory::take(12)->get();

        return view('pages.blogcategory',[
            'blogcategories' => $blogcategories,
            'blog' => $blog
        ]);
    }


    public function detail(Request $request, $slug)
    {
        $blogcategories = Blogcategory::all();
        $blogcategory = Blogcategory::where('slug', $slug)->firstOrFail();
        $blog = Blog::all()->where('blogcategories_id', $blogcategory->id);


        return view('pages.blogcategory',[
            'blogcategories' => $blogcategories,
            'blog' => $blog
        ]);
    }
}
