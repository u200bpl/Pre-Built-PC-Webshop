<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function index() {
        return view('admin.products.index');
    }

    public function create() {
        $cat = Category::all();
        $subcat = SubCategory::all();
        return view('admin.products.create',[
            'cat' => $cat,
            'subcat' => $subcat
        ]);
    }

    public function store(Request $request){
        Products::create($request->except('_token'));
        return redirect()->route('admin.products.index');
    }
}