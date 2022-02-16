<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function formCreateCategory() {
        return view('admin.pages.category.createCategory');
    }

    public function createCategory(Request $request) {
        $category = new Category();
        $category->name = $request->nameCategory;
        $category->description = $request->descCategory;
        $category->status = $request->statusCategory;
        $category->slug = $request->descSlug;
        $category->save();

        return redirect('admin/danh-sach-danh-muc');
    }

    public function listCategory() {
        $listCategories = Category::all();
        return view('admin.pages.category.listCategory', compact('listCategories'));
    }

    public function formEditCategory($slugCategory) {
        $category = Category::where('slug', $slugCategory)->first();
        return view('admin.pages.category.editCategory', compact('category'));
    }

    public function editCategory(Request $request) {
        $category = Category::find($request->idCategory);
        $category->name = $request->nameCategory;
        $category->description = $request->descCategory;
        $category->status = $request->statusCategory;
        $category->save();
        return redirect('admin/danh-sach-danh-muc');
    }

    public function deleteCategory($slugCategory) {
        $category = Category::where('slug', $slugCategory)->first();
        $category->delete();
        return redirect()->back();
        
    }
}
