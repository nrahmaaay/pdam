<?php

namespace App\Http\Controllers;

use App\Models\InsertPosisiMeter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class InsertPosisiMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.insertPosisiMeter.index');
    }

    public function import()
    {
        $data = Excel::toArray(new InsertPosisiMeter(), request()->file('file')); 

        return collect(head($data))
            ->each(function ($row, $key) {
                DB::table('produk')
                    ->where('id_produk', $row['id'])
                    ->update(array_except($row, ['id']));
            });
    }

    public function model(array $row)
    {
        return new InsertPosisiMeter([
            'no' => $row[1],
            'no_plg' => $row[2], 
            'posisi_meter' => $row[3], 
        ]);
    }
}
