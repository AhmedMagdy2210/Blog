<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\addCategoryRequset;
use App\Http\Requests\deleteCategoryRequset;
use App\Http\Requests\updateCategoryRequset;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isEmpty;

class CategoryController extends Controller {
    // public function index() {
    // }
    public function add() {
        $data = category::get();
        return view('Admin/category/addCategory', compact('data'));
    }
    public function store(addCategoryRequset $request) {
        category::create([
            'name' => $request->category_name
        ]);
        Alert::success('success', 'Category added succseefully');
        return redirect()->back();
    }
    public function delete(deleteCategoryRequset $request) {
        $cat_id = $request->get('category_id');
        $category = category::find($cat_id);
        $category->delete();
        Alert::success('Delete', 'Category Deleted succseefully');
        return redirect()->back();
    }
    public function edit($id) {
        $category = category::find($id);
        return view('Admin/category/editCategory', compact('category', $category));
    }
    public function update(updateCategoryRequset $request) {
        $category = category::find($request->category_id);
        $category->update([
            'name' => $request->category_name
        ]);
        Alert::success('Updated', 'Category Updated succseefully');
        return redirect('admin/categories/add');
    }
}
