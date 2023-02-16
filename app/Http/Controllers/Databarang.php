<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Databarang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('barang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Request()->validate(
            [
                'kd_barang' => 'required|unique:barangs,kd_barang',
                'nm_barang' => 'required',
                'tp_barang' => 'required',
                'jml_barang' => 'required',
                'dstbr_barang' => 'required',
                'tgl_masuk' => 'required',
                'tgl_keluar' => 'required',

            ],
            [
                'kd_barang.unique' => 'Kode barang telah digunakan',
                'kd_barang.required' => 'Harap Diisi Kode barang',
                'nm_barang.required' => 'Harap Diisi Nama barang',
                'tp_barang.required' => 'Harap Diisi Tipe barang',
                'jml_barang.required' => 'Harap Diisi Jumlah barang',
                'dstbr_barang.required' => 'Harap Diisi Distributor',
                'tgl_masuk.required' => 'Harap Diisi Tanggal masuk',
                'tgl_keluar.required' => 'Harap Diisi Tanggal keluar',
            ]
        );


        $insert = new barang;
        $insert->kd_barang = $request->kd_barang;
        $insert->nm_barang = $request->nm_barang;
        $insert->tp_barang = $request->tp_barang;
        $insert->jml_barang = $request->jml_barang;
        $insert->dstbr_barang = $request->dstbr_barang;
        $insert->tgl_masuk = $request->tgl_masuk;
        $insert->tgl_keluar = $request->tgl_keluar;
        $insert->save();

        return redirect('table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* return view('barang.edit'); */
        $data = barang::where('id', $id)->first();
        return view('barang.modal_edit_delete')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = ([
        //     'kd_barang' => $request->kd_barang,
        //     'nm_barang' => $request->nm_barang,
        //     'tp_barang' => $request->tp_barang,
        //     'jml_barang' => $request->jml_barang,
        //     'dstbr_barang' => $request->dstbr_barang,
        //     'tgl_masuk' => $request->tgl_masuk,
        //     'tgl_keluar' => $request->tgl_keluar
        // ]);

        // barang::where('id', $id)->update($data);


        Request()->validate(
            [
                'kd_barang' => 'required',
                'nm_barang' => 'required',
                'tp_barang' => 'required',
                'jml_barang' => 'required',
                'dstbr_barang' => 'required',
                'tgl_masuk' => 'required',
                'tgl_keluar' => 'required',

            ],
            [
                'kd_barang.required' => 'Harap Diisi Kode barang',
                'nm_barang.required' => 'Harap Diisi Nama barang',
                'tp_barang.required' => 'Harap Diisi Tipe barang',
                'jml_barang.required' => 'Harap Diisi Jumlah barang',
                'dstbr_barang.required' => 'Harap Diisi Distributor',
                'tgl_masuk.required' => 'Harap Diisi Tanggal masuk',
                'tgl_keluar.required' => 'Harap Diisi Tanggal keluar',
            ]
        );

        $data = barang::find($id);
        $data->update($request->all());
        return redirect()->to('table')->with('succes', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = barang::find($id);
        $data->delete();
        return redirect('table');
    }

    public function halamanTable()
    {
        // $create = barang::all();
        // return view('barang.tables', compact('create'));

        $tampil = barang::all();
        return view('barang.tables', compact('tampil'));
    }

    public function LogOut()
    {
        auth::logout();
        return redirect('');
    }
}