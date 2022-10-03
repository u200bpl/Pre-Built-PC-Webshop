<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computers;
use App\Models\Products;
use App\Models\Category;
use App\Models\SubCategory;

class ComputerController extends Controller
{
    public function index() {
        $computers = Computers::all();
        return view('welcome',[
            'computers' => $computers,
        ]);
    }

    public function computerindex() {
        $computers = Computers::all();
        return view('computers.hydra.index',[
            'computers' => $computers,
        ]);
    }
}
