<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
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
        // dd($request->all());
        $request->validate([
            'title' => 'required|unique:blogs,title',
            'content' => 'required',
            'is_published' => 'required',
            'slug' => 'required|unique:blogs,slug',
        ]);

        $blog = [
            'title' => $request->title,
            'content' => $request->content,
            'is_published' => $request->is_published,
            'slug' => $request->slug
        ];
        if ($request->is_published == '1') {
            $blog['published_at'] = Carbon::now();
        }
        Blog::create($blog);

        return redirect()->route('admin.blog.view')->with('success', 'Blog created successfully');
    }

    public function show(Blog $blog)
    {
        return view('pages.admin.blogsView')->with('blog', $blog);
    }

    public function edit(Blog $blog)
    {
        return view('pages.admin.blogsEdit')->with('blog', $blog);
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $blog->id,
            'content' => 'required',
            'is_published' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->is_published = $request->is_published;
        $blog->slug = $request->slug;
        if ($request->is_published == '1') {
            $blog->published_at = Carbon::now();
        } else {
            $blog->published_at = null;
        }
        $blog->save();
        return view('pages.admin.blogsView')->with('blog', $blog)->with('success', 'Blog updated successfully');
    }
    public function uploadImagesPage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images/blog'), $imageName);
        $returnPath = url('images/blog/' . $imageName);
        return response()->json(['location' => $returnPath]);
    }

    public function userIndex()
    {
        $blogs = Blog::where('is_published', 1)->OrderBy(
            'created_at',
            'desc'
        )->paginate(9);
        return view('pages.blogs')->with('blogs', $blogs);
    }

    public function userShow($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog || $blog->is_published == 0) {
            return redirect()->route('blog.view')->with('error', 'Blog not found');
        }


        return view('pages.blog')->with('blog', $blog);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.view')->with('success', 'Blog deleted successfully');
    }
}
