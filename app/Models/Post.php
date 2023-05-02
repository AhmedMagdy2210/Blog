<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;
    protected $fillable = ['title', 'content', 'photo', 'user_id', 'category_id'];

    public static function AddPostRules() {
        return [
            'title' => 'required|min:4|max:120',
            'image' => 'image|mimes:jpeg,jpg,png,gif,webp',
            'content' => 'required',
            'category_id' => 'required|integer',
            'user_id' => 'required|integer'
        ];
    }
    public static function DeletePostRules() {
        return [
            'post_id' => 'required|exists:posts,id'
        ];
    }

    protected $with = ['category', 'user'];
    public function category() {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
