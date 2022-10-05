<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Pccase;
use App\Models\Processor;
use App\Models\Graphicscard;
use App\Models\Ram;
use App\Models\Motherboard;
use App\Models\Cpucooler;
use App\Models\Storage;
use App\Models\Psu;

class ComputerController extends Controller
{
    public function index(){
        return view('welcome', [
            'computers' => Computer::all()
        ]);
    }

    public function adminView(){
        return view('admin.index', [
            'computers' => Computer::all()
        ]);
    }

    public function show(){
        return view('computers.index', [
            'computers' => Computer::all(),
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
        return view('admin.index', [
            'computers' => Computer::all()
        ]);
    }

    public function adminDetail($id){
        $computer = Computer::findOrFail($id);
        return view('layouts.detail', [
            'computer' => $computer,
            'computers' => Computer::all()
        ]);
    }

    public function create(){
        return view('admin.computers.create', [
            'computers' => Computer::all(),
            'pccases' => Pccase::all(),
            'processors' => Processor::all(),
            'graphicscards' => Graphicscard::all(),
            'cpucoolers' => Cpucooler::all(),
            'motherboards' => Motherboard::all(),
            'rams' => Ram::all(),
            'storages' => Storage::all(),
            'psus' => Psu::all()
        ]);
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255|min:3|unique:computers',
            'description' => 'required',
            'pccase_id' => 'required',
            'processor_id' => 'required',
            'graphicscard_id' => 'required',
            'motherboard_id' => 'required',
            'cpucooler_id' => 'required',
            'ram_id' => 'required',
            'storage_id' => 'required',
            'psu_id' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        Computer::create($request->except('_token'));
        return redirect()->route('admin.index');
    }

    public function edit($id) {
        $computer = Computer::findOrFail($id);
        return view('admin.computers.edit', [
            'computers' => Computer::all(),
            'pccases' => Pccase::all(),
            'processors' => Processor::all(),
            'graphicscards' => Graphicscard::all(),
            'cpucoolers' => Cpucooler::all(),
            'motherboards' => Motherboard::all(),
            'rams' => Ram::all(),
            'storages' => Storage::all(),
            'psus' => Psu::all()
        ])->with(['computer' => $computer]);
    }

    public function update(Request $request, $id)  {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'pccase_id' => 'required',
            'processor_id' => 'required',
            'graphicscard_id' => 'required',
            'motherboard_id' => 'required',
            'cpucooler_id' => 'required',
            'ram_id' => 'required',
            'storage_id' => 'required',
            'psu_id' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        $computer = Computer::findOrFail($id);
        $computer->name = $request->name;
        $computer->pccase_id = $request->pccase_id;
        $computer->processor_id = $request->processor_id;
        $computer->graphicscard_id = $request->graphicscard_id;
        $computer->motherboard_id = $request->motherboard_id;
        $computer->cpucooler_id = $request->cpucooler_id;
        $computer->ram_id = $request->ram_id;
        $computer->storage_id = $request->storage_id;
        $computer->psu_id = $request->psu_id;
        $computer->price = $request->price;
        $computer->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id) {
        Computer::destroy($id);
        return redirect()->route('admin.index');
    }

}