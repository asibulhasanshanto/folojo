<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::OrderBy(
            'created_at',
            'desc'
        )->paginate(9);
        return view('pages.admin.blogs')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('pages.admin.blogsCreate');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required',
            'slug' => 'required|unique:blogs,slug',
        ]);

        Blog::create($request->all());

        return redirect()->route('admin.blog.view');
    }

    public function show(Blog $blog)
    {
        return view('pages.admin.blogsShow')->with('blog', $blog);
    }

    public function uploadImagesPage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images/blog'), $imageName);
        return response()->json(['location' => asset('images/blog/' . $imageName)]);
    }
}