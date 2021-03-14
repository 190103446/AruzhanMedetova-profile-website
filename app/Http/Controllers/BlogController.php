<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::all();

        return view ('blog.index')->with(['blog' => $blog]);
    }
    public function store(Request $request) {
        Blog::create([
            'id' => $request->id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();
    }
}
