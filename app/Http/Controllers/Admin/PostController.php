<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\addPostRequest;
use App\Http\Requests\Post\deletePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Http\Traits\ImagesTrait;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller {
    use ImagesTrait;
    public function index() {
        $posts = Post::get();
        return view('Admin/post/index', compact('posts'));
    }
    public function add() {
        $categories = category::get();
        return view('Admin/post/addpost', compact('categories'));
    }
    public function store(addPostRequest $request) {
        // $file = $request->image;
        // $file->move(public_path('upload/post/images'), $fileName);
        $fileName = time() . '_post' . '.' . $request->image->getClientOriginalExtension();
        $this->uploadImage($request->image, $fileName, '/post/images');
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $fileName,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id
        ]);
        Alert::success('Success', 'Post added successfully');
        return redirect(route('admin.post.posts'));
    }
    public function delete(deletePostRequest $request) {
        $post_id = $request->get('post_id');
        $post = Post::find($post_id);
        unlink(public_path('/upload/post/images/' . $post->photo));
        $post->delete();
        Alert::success('Delete', 'Post Deleted succseefully');
        return redirect()->back();
    }
    public function edit($id) {
        $post = Post::find($id);
        $categories = category::get();
        return view('Admin/post/editpost', compact('post', 'categories'));
    }
    public function update(UpdatePostRequest $request) {
        $post = Post::find($request->post_id);
        $oldImage = '/post/images/' . $post->photo;
        $fileName = time() . '_post' . '.' . $request->image->getClientOriginalExtension();
        $this->uploadImage($request->image, $fileName, '/post/images', $oldImage);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $fileName,
            'category_id' => $request->category_id
        ]);
        Alert::success('Updated', 'Post Updated succseefully');
        return redirect(route('admin.post.posts'));
    }
}
