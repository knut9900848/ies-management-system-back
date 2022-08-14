<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Api\V1\Admin\Category;
use App\Models\Api\V1\Admin\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(Category $category)
    {
        $subCagegories = $category->sub_categories;

        return response()->json([
            'subCategories' => $subCagegories
        ]);
    }

    public function store(StoreSubCategoryRequest $request, Category $category)
    {
        $subCategory = new SubCategory;
        $subCategory->name = $request->name;
        $subCategory->code = $request->code;
        $subCategory->is_active = $request->is_active;
        $subCategory->description = $request->description;
        $subCategory->category_id = $category->id;
        $subCategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Sub Category has created successfully.',
            'subCategory' => $subCategory
        ]);
    }

    public function update(UpdateSubCategoryRequest $request, Category $category, SubCategory $subCategory)
    {
        $subCategory->name = $request->name;
        $subCategory->code = $request->code;
        $subCategory->is_active = $request->is_active;
        $subCategory->description = $request->description;
        $subCategory->category_id = $category->id;
        $subCategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Sub Category has updated successfully.',
            'subCategory' => $subCategory
        ]);
    }
}
