<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computers;
use App\Models\Products;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function home() {
        $computers = Products::all();
        return view('welcome',[
            'computers' => $computers,
        ]);
    }

    public function index() {
        $products = Products::all();
        return view('admin.products.index',[
            'products' => $products,
        ]);

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