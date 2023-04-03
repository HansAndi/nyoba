<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = menu::all();
        $data = menu::paginate(5);
        return view('menu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('gambar'));
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:2048'

            // 'inputs.*.nama' => 'required',
            // 'inputs.*.deskripsi' => 'required',
            // 'inputs.*.harga' => 'required',
            // 'inputs.*.gambar' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $data = menu::create($request->all());

        // foreach ($request->inputs as $key => $value) {
        //     $data = menu::create($value);
        //     if ($request->hasFile($value['gambar'])) {
        //         $request->file($value['gambar'])->move('fotoMenu/', $request->file($value['gambar'])->getClientOriginalName());
        //         $data->gambar = $request->file($value['gambar'])->getClientOriginalName();
        //         $data->save();
        //     }
        // }
        // $fileModel = new menu;

        // if ($request->file()) {
        //     $fileName = time() . '_' . $request->gambar->getClientOriginalName();
        //     $filePath = $request->file('gambar')->storeAs('uploads', $fileName, 'public');
        //     $fileModel->name = time() . '_' . $request->gambar->getClientOriginalName();
        //     $fileModel->file_path = '/storage/' . $filePath;
        //     $fileModel->save();
        // }

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('fotoMenu/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        // dd($request->all());

        return redirect()->route('menu.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('edit-data');
        $data = menu::findOrfail($id);
        // dd($data);
        return view('menu.edit-data', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = menu::find($id);
        $data->update($request->all());
        // dd($data);
        return redirect()->route('menu.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = menu::findOrfail($id);
        $data->delete();
        // dd($data);
        return redirect()->route('menu.index')->with('success', 'Data berhasil dihapus');
    }
}
