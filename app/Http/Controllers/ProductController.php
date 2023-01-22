<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::orderByDesc('created_at')->paginate(10);
        return view('products.index',[
            'products'=>$products,
            'categoryName'=>$request->name
        ]);
    }

    public function create()
    {
        return view('products.create',[
        ]);
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product -> name = $request['name'];
        $product -> cost = $request['cost'];
        $product -> amount = $request['amount'];
        $product -> save();
        return redirect() -> route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
