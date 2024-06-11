<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use PDF;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::orderBy('name', 'asc')->get();

        return view('dosen.dosen', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.dosen-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:tdosen',
            'prodi' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
        ]);

        $dosen = Dosen::create($request->all());

        Alert::success('Success', 'Dosen has been saved !');
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_dosen)
    {
        $dosen = dosen::findOrFail($id_dosen);

        return view('dosen.dosen-edit', [
            'dosen' => $dosen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_dosen)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:tdosen,name,' . $id_dosen . ',id_dosen',
            'prodi' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
        ]);

        $dosen = Dosen::findOrFail($id_dosen);
        $dosen->update($validated);

        Alert::info('Success', 'Dosen has been updated !');
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_dosen)
    {
        try {
            $deleteddosen = Dosen::findOrFail($id_dosen);

            $deleteddosen->delete();

            Alert::error('Success', 'Dosen has been deleted !');
            return redirect('/dosen');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, Dosen already used !');
            return redirect('/dosen');
        }
    }

    // function printDosen()
    // {
    //     $dosen = Dosen::all();
    //     $data = ['tdosen' => $dosen];

    //     $pdf = PDF::loadView('dosen.dosen-print', $data);

    //     return $pdf->stream('view-dosen.pdf');
    // }
}
