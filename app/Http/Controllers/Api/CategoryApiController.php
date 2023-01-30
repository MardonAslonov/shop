<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index()
    {
        // return Category::all();
        return CategoryResource::collection(Category::all());
    }

    public function store(CategoryStoreRequest $request)
    {
        $categoryCreate = Category::create($request->validated());
        return ($categoryCreate);
    }

    public function show($id)
    {
        return new CategoryResource(Category::findOrFail($id));
    }

    public function update(CategoryStoreRequest $request, Category $cate)
    {
        $cate->update($request->validated());
        return $cate;
        // return 'Assalom';
    }

    //

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return 'delete done';
    }
}
