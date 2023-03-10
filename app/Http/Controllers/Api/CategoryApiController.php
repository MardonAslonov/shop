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
        $categoryies = Category::with('products')->get();
        return $categoryies;


        // $product = Category::find(1)->name;
        // return $product;


        // return Category::all();
        // return CategoryResource::collection(Category::all());
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

    public function update(Request $request,$id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return $category;
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return Category::all();
    }
}
