<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class barangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        Request()->validate(
            [
                'email' => 'required',
                'name' => 'required|min:4',
                'password' => 'required|min:4',

                'kd_barang' => 'required',
                'nm_barang' => 'required',
                'tp_barang' => 'required',
                'jml_barang' => 'required',
                'dstbr_barang' => 'required',
                'tgl_masuk' => 'required',
                'tgl_keluar' => 'required',

            ],
            [
                'email.required' => 'Harap Diisi Email',
                'name.required' => 'Harap Diisi Username',


                'password.required' => 'Harap Diisi Password',

                'kd_barang.required' => 'Harap Diisi Kode barang',

                'kd_barang.required' => 'Harap Diisi Kode barang',
                'nm_barang.required' => 'Harap Diisi Nama barang',
                'tp_barang.required' => 'Harap Diisi Tipe barang',
                'jml_barang.required' => 'Harap Diisi Jumlah barang',
                'dstbr_barang.required' => 'Harap Diisi Distributor',
                'tgl_masuk.required' => 'Harap Diisi Tanggal masuk',
                'tgl_keluar.required' => 'Harap Diisi Tanggal keluar',
            ]
        );
    }
}