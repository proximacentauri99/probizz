<?php

namespace App\Http\Controllers;

use App\Models\BusinessGoals;
use App\Models\ItGoals;
use App\Models\Pertanyaan;
use App\Models\Stakeholder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{

    public function showKuisioner(Request $request)
    {
        $idItProcess = $request->it_process;
        $levelWanted = $request->level_wanted;
//        dd($request->all());

        $daftarLevel0 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 0)->get();
        $daftarLevel1 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 1)->get();
        $daftarLevel2 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 2)->get();
        $daftarLevel3 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 3)->get();
        $daftarLevel4 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 4)->get();
        $daftarLevel5 = Pertanyaan::where('id_it_process', $idItProcess)->where('level', 5)->get();
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
            'level_wanted' => $levelWanted
            ];

        return view('kuisioner', compact('daftarPertanyaan'));
    }

    public function getBusinessGoals()
    {
        $daftarBusinessGoals = BusinessGoals::all();
//        dd($daftarBusinessGoals);
        $daftarBusinessGoals = json_encode($daftarBusinessGoals);
        return response()->json(['success' => true, 'data' => $daftarBusinessGoals]);
    }

    public function getItGoals(Request $request)
    {
        if($request->ajax()){
            $idBusinessGoal = $request->id_business_goal;
            $daftarItGoals = DB::table('it_goals')->whereIn('id', function($query) use($idBusinessGoal) {
                $query->select('id_it_goal')
                    ->from('business_it_goals')
                    ->where('id_business_goals', $idBusinessGoal);
            })->get();
            $daftarItGoals = json_encode($daftarItGoals);
            return response()->json(['success' => true, 'data' => $daftarItGoals]);
        }
    }

    public function getStakeholder()
    {
        $daftarStakeholder = Stakeholder::all();
//        dd($daftarStakeholder);
        $daftarStakeholder = json_encode($daftarStakeholder);
        return response()->json(['success' => true, 'data' => $daftarStakeholder]);
    }

    public function getItProcess(Request $request)
    {
        if($request->ajax()){
            $idItGoal = $request->id_it_goal;
            $idStakeholder = $request->id_stakeholder;
            $daftarItProcess = DB::table('it_process')
                ->whereIn('id', function($query) use($idItGoal) {
                $query->select('id_it_process')
                    ->from('it_goal_process')
                    ->where('id_it_goal', $idItGoal);
                })
                ->whereIn('id', function($query) use($idStakeholder) {
                    $query->select('id_it_process')
                        ->from('stakeholder_it_process')
                        ->where('id_stakeholder', $idStakeholder);
                })
                ->get();
            $daftarItProcess = json_encode($daftarItProcess);
            return response()->json(['success' => true, 'data' => $daftarItProcess]);
        }
    }

    public function showFormulir()
    {
        return view('formulir');
    }

}
