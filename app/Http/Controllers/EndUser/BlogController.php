<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller {
    public function index(Request $request) {
        if ($request->category) {
            $posts = Post::where('category_id', $request->category)->get();
        } else {
            $posts = Post::all();
        }

        $categories = category::all();
        return view('Enduser/index', compact('posts', 'categories'));
    }
    public function single($id) {
        $post = Post::findOrFail($id);
        return view('Enduser/single', compact('post'));
    }
}
