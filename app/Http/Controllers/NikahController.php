<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Skill;

class NikahController extends Controller
{
    public $skillanak;

    public function index()
    {
        $anggota = Anggota::get();
        $skill = $this->skillanak;
        return view('children.menikah', ['anggota' => $anggota, 'skillanak' => $skill]);
    }

    public function show(Request $request)
    {
        $idL = $request->idHeroLaki;
        $idP = $request->idHeroIstri;
        $skillSuami = Skill::find('anggota_id', $idL);
        $skillIstri = Skill::find('anggota_id', $idP);

        $merge = array_merge($skillSuami->toArray(), $skillIstri->toArray());
        $this->skillanak = $merge;

        return redirect('/menikah');
    }
}
