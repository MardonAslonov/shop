<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{

    public function index()
    {
        $product = Product::with('category')->get();
        return $product;

        // return response()->json($product);
    }

    public function store(ProductStoreRequest $request)
    {
        $productCreate = Product::create($request->validated());
        return ($productCreate);
    }

    public function show($id)
    {
        return new ProductResource(Product::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return Product::all();
    }
}
