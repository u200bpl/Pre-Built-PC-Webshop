<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;



class ComputerController extends Controller
{
    public function index(){
        return view('welcome', [
            'computers' => Computer::all()
        ]);
    }

    public function show(){
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    public function detail($id){
        $computer = Computer::findOrFail($id);
        return view('layouts.detail', [
            'computer' => $computer,
            'computers' => Computer::all()
        ]);
    }

    public function admin(){
        return view('admin.computers.index', [
            'computers' => Computer::all()
        ]);
    }
}