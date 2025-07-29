<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Barang;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index');
    }

    public function getBarang(Request $request)
    {
        if(request()->ajax()) {
            $barang = Barang::all();
            return DataTables::of($barang)
                ->addIndexColumn()
                ->editColumn('action', function ($barang) {
                    return view('partials._action', [
                        'model' => $barang,
                        'url_edit' => route('barang.edit', $barang->id),
                        'url_destroy' => route('barang.destroy', $barang->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'satuan' => 'required',
        ]);

        Barang::create($barang);

        toast('Berhasil menambahkan data barang','success');
        return redirect()->route('barang.index')->with('success', 'Berhasil menambahkan data barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'satuan' => 'required',
        ]);

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'satuan' => $request->satuan,
        ]);

        toast('Berhasil mengubah Data Barang','success');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
        toast('Berhasil menghapus Data Barang','success');
        return redirect()->route('barang.index');
    }

    public function cetakPdf()
    {
        $barang = Barang::all();
        $pdf = Pdf::loadview('barang._laporan', compact('barang'));
        return $pdf->stream('barang.pdf');
    }

    public function exportExcel()
    {
        $barang = Barang::all();
        return view('barang._excel', compact('barang'));

    }
}
