<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Anggota;

class skillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('children.tambahSkill');
    }

    public function removeskill($hero, $skill)
    {
        $skill = Skill::find($skill);
        $anggota = Anggota::find($hero);
        $anggota->skills()->detach($skill);

        return redirect('/skill');
    }

    public function updateskill(Request $request, $id)
    {
        $validate = $request->validate([
            'idHero' => 'required'
        ]);
        $idhero = $request->idHero;
        $anggota = Anggota::find($idhero);
        $skill = Skill::find($id);
        $anggota->skills()->attach($skill);
    
        return redirect ('/skill');
    }

    public function listHero($id)
    {
        $lists = Anggota::get();
        return view('children.tambahSkillHero',[
            'lists' => $lists,
            'idskill' => $id,
        ]);
    }

    public function index()
    {
        $skills = Skill::latest()->get();
        return view('children.listSkill', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:254',
        ]);
        Skill::create($validate);
        return redirect('/skill');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::where('id',$id)->first();
        return view ('children.detailSkill', ['skill' => $skill, 'idskill' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $rules = [
            'name' => 'required',
        ];
        $validated = $request->validate($rules);
        Skill::find($id)->update($validated);

        return redirect('/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
