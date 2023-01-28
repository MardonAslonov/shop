<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products=Product::where('category_id',$request->category_id)->get();
        return view('products.index',[
            'products'=>$products,
            'categoryName'=>$request->categoryName,
            'category_id'=>$request->category_id
        ]);
    }

    public function create(Request $request)
    {
        return view('products.create',[
        'categoryName'=>$request->categoryName,
        'category_id'=>$request->category_id
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product -> category_id = $request->category_id;
        $product -> name = $request['name'];
        $product -> cost = $request['cost'];
        $product -> amount = $request['amount'];
        $product -> save();
        return redirect() -> route('product', [$request->categoryName,$request->category_id]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
