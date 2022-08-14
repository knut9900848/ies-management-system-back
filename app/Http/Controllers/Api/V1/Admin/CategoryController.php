<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Api\V1\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cagegories = Category::all();

        return response()->json([
            'categories' => $cagegories
        ]);
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->code = $request->code;
        $category->is_active = $request->is_active;
        $category->description = $request->description;
        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category has created successfully.',
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->code = $request->code;
        $category->is_active = $request->is_active;
        $category->description = $request->description;
        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category has updated successfully.',
            'category' => $category
        ]);
    }
}
