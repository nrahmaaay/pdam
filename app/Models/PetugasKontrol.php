<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasKontrol extends Model
{
    use HasFactory;

    protected $table = "PTGKONTROL";

    public function showPetugas()
    {
        return DB::table($this->table)
                    ->select('PTGKONTROL.*')
                    ->join('DIP', 'DIP.nip', '=', 'PTGKONTROL.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where(DB::raw('substr(KD_PTGKTRL,1,1)'), '=' , 'T')
                    ->get();
    }
    public static function getData()
    {
        return DB::table("PTGKONTROL")
                ->where(DB::raw('substr(kd_ptgktrl,1,1)'), '=' , '')
                ->orderBy('kd_ptgktrl')
                ->get();
    }

    public function getLastKode()
    {
        return DB::table($this->table)
                    ->select('PTGKONTROL.kd_ptgktrl')
                    ->join('DIP', 'DIP.nip', '=', 'PTGKONTROL.nip')
                    ->join('UNIT_KERJA', 'UNIT_KERJA.kd_unitkrj', '=', 'DIP.kd_unitkrj')
                    ->where(DB::raw('substr(KD_PTGKTRL,1,1)'), '=' , 'T')
                    ->latest('PTGKONTROL.kd_ptgktrl')
                    ->first();
    }

}
