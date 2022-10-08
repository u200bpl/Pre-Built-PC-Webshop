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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.computer.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pages.computer.create', [
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'price' => 'numeric|min:0',
            'stock' => 'numeric|min:0',
        ]);

        Computer::create($request->except('_token'));
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        return view('pages.computer.show', [
            'computers' => Computer::all(),
            'computer' => $computer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $computer = Computer::findOrFail($id);
        return view('pages.computer.edit', [
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            'stock' => 'numeric|min:0',
            'price' => 'numeric|min:0',
        ]);

        $computer = Computer::findOrFail($id);
        $computer->name = $request->name;
        $computer->img = $request->img;
        $computer->description = $request->description;
        $computer->price = $request->price;
        $computer->pccase_id = $request->pccase_id;
        $computer->processor_id = $request->processor_id;
        $computer->graphicscard_id = $request->graphicscard_id;
        $computer->motherboard_id = $request->motherboard_id;
        $computer->cpucooler_id = $request->cpucooler_id;
        $computer->ram_id = $request->ram_id;
        $computer->storage_id = $request->storage_id;
        $computer->psu_id = $request->psu_id;
        $computer->os = $request->os;
        $computer->warranty = $request->warranty;
        $computer->is_active = $request->is_active;
        $computer->stock = $request->stock;
        $computer->save();

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Computer::destroy($id);
        return redirect()->route('admin.index');
    }
}
