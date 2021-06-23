<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{

    public function showKuisioner(Request $request)
    {
        $daftarLevel0 = Pertanyaan::where('id_it_process', 1)->where('level', 0)->get();
        $daftarLevel1 = Pertanyaan::where('id_it_process', 1)->where('level', 1)->get();
        $daftarLevel2 = Pertanyaan::where('id_it_process', 1)->where('level', 2)->get();
        $daftarLevel3 = Pertanyaan::where('id_it_process', 1)->where('level', 3)->get();
        $daftarLevel4 = Pertanyaan::where('id_it_process', 1)->where('level', 4)->get();
        $daftarLevel5 = Pertanyaan::where('id_it_process', 1)->where('level', 5)->get();
        $daftarPertanyaan = [
            'level0' => $daftarLevel0,
            'jumlah_level0' => count($daftarLevel0),
            'level1' => $daftarLevel1,
            'jumlah_level1' => count($daftarLevel1),
            'level2' => $daftarLevel2,
            'jumlah_level2' => count($daftarLevel2),
            'level3' => $daftarLevel3,
            'jumlah_level3' => count($daftarLevel3),
            'level4' => $daftarLevel4,
            'jumlah_level4' => count($daftarLevel4),
            'level5' => $daftarLevel5,
            'jumlah_level5' => count($daftarLevel5),
            'level_wanted' => 4
            ];

        return view('kuisioner', compact('daftarPertanyaan'));
    }

}
