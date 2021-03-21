<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class ApiController extends Controller
{
    public function index(Request $request) {
        $blogs = Blog::all();

        return response ($blogs, 200);
    }

    public function get_blog(Request $request) {
        $blog = Blog::find($request->blog_id);

        if ($blog == null) {
        return response(['message' => 'There is no blog'], 404);
        }

        return response($blog, 200);
    }
}
