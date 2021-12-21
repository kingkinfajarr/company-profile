<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $validatedData = $request->validate([
            'image_blog' => 'image|file|max:1024',
            'author' => 'required',
            'date' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
        
        if ($request->file('image_blog')) {
            $validatedData['image_blog'] = $request->file('image_blog')->store('post-images');
        }

        Blog::create($validatedData);


        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog = Blog::get()->where('slug', $blog->slug);
        return view('blog-details', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'image_blog' => 'image|file|max:1024',
            'author' => 'required',
            'date' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
        
        if ($request->file('image_blog')) {
            $validatedData['image_blog'] = $request->file('image_blog')->store('post-images');
        }

        $blog->update($validatedData);


        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
