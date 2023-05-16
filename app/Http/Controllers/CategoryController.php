<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.show', compact('categories'));
    }

    public static function subCategories(Request $request)
    {
        $categories = Category::subCategory($request->category_id)->get();
        return view('subCategory.show', compact('categories'));
    }
}
