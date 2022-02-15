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
        
    }

    public function listCategory() {
        $listCategories = Category::all();
        return view('admin.pages.category.listCategory', compact('listCategories'));
    }
}
