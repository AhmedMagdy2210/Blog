<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model {
    use HasFactory;
    protected $fillable = ['name'];

    public static function addRules() {
        return [
            'category_name' => 'required|min:4|max:20'
        ];
    }
    public static function deleteRules() {
        return [
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
