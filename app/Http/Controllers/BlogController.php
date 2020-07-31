<?php

namespace App\Http\Controllers;

use App\Category;
use App\post;

class BlogController extends Controller
{
    public function index()
    {

        $posts = post::latest()->where('status', 'Published')->paginate(5);
        $categories = Category::withCount('post')->get();
        return view('blog', ['posts' => $posts, 'categories' => $categories]);
    }

    public function post($slug)
    {
        $post = post::where('slug', $slug)->firstorfail();
        $categories = Category::withCount('post')->get();
        return view('artikel', ['post' => $post, 'categories' => $categories]);
    }

    public function showCategoryPost($slug)
    {
        $categoryPost = Category::with('post')->where('slug', $slug)->firstorfail();
        $categories = Category::withCount('post')->get();
        return view('category', ['categoryPost' => $categoryPost, 'categories' => $categories]);
    }
}
