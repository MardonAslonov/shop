<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $categories = Category::orderByDesc('created_at')->paginate(10);
        return view('category.category',[
            'categories'=>$categories
        ]);
    }

    public function categoryCreate(){
        return view('category.create',[
        ]);
    }

    public function createCategoryInfo(Request $request){
        $category = new Category();
        $category -> name = $request['name'];
        $category -> mahsulotSoni = 0;
        $category -> save();
        return redirect() -> route('category');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
