<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggan;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class JenisPelangganController extends Controller
{
    public function index()
    {
        $jenisPelanggans = JenisPelanggan::all();
        return view('master.jenisPelanggan.index', compact('jenisPelanggans'))->with('i');
    }

    public function print()
    {
        $jenisPelanggans = JenisPelanggan::all();
        return view('master.jenisPelanggan.print', compact('jenisPelanggans'))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jns_pelanggan' => 'required',
            'keterangan'    => 'required'
        ]);

        JenisPelanggan::insert([
            'jns_pelanggan' => $request->jns_pelanggan,
            'keterangan'    => $request->keterangan,
            'jns_rekswasta' => "S"
        ]);

        return redirect()->route('jenisPelanggan.index');
    }

    public function update(Request $request, $jns_pelanggan)
    {
        // $request->validate([
        //     'jns_pelanggan' => 'required|max:255',
        //     'keterangan'    => 'required'
        // ]);

        JenisPelanggan::where(DB::raw("REPLACE(jns_pelanggan,' ','')"), $jns_pelanggan)
        ->update([
            'jns_pelanggan' => $request->jns_pelanggan,
            'keterangan'    => $request->keterangan,
            'jns_rekswasta' => $request->jns_rekswasta
        ]);

        return redirect()->route('jenisPelanggan.index');
    }

    public function show($jns_pelanggan)
    {
        $jenisPelanggan = JenisPelanggan::where('jns_pelanggan', $jns_pelanggan)->first();

        return response()->json($jenisPelanggan);
    }


    public function destroy($jns_pelanggan)
    {
        JenisPelanggan::where(DB::raw("REPLACE(jns_pelanggan,' ','')"), $jns_pelanggan)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Pelanggan Berhasil Dihapus',
        ]);
    }
}
